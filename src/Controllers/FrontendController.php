<?php

namespace Kwidoo\BoyarCaviar\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Cart;
use Kwidoo\BoyarCaviar\Requests\CheckoutRequest;
use Auth;
use PDF;
use Illuminate\Support\Facades\Mail;
use Kwidoo\BoyarCaviar\Mail\OrderCreated;


class FrontendController extends Controller
{

	public function index(){

		return view('boyarcaviar::frontpage.main');
	}

	public function buy(Request $request){
		Cart::add($request->product_id, $request->name, $request->qty, $request->price, ['size' => $request->size, 'type' => $request->type, 'image' => $request->image]);

		$z = Cart::search(function ($cartItem, $rowId) {
			return $cartItem->name === 'Flat Rate Shipping';
		});

		if (count($z) == 0) {
			Cart::add('127341','Flat Rate Shipping', 1, 50.00, ['size' => '', 'type' => '', 'image' => '']);
		}

		return Cart::total();
	}

	public function showCart(){
		return view('boyarcaviar::frontpage.cart');
	}

	public function delete(Request $request){
		Cart::remove($request->row_id);
		return view('boyarcaviar::partials.cart_list');
	}
	public function update(Request $request){
		Cart::update($request->row_id, $request->qty);
		return view('boyarcaviar::partials.cart_list');
	}

	public function cartState(){
		return Cart::total();
	}

	public function empty() {
		Cart::destroy();
		return view('boyarcaviar::frontpage.cart');		
	}

	public function checkout() {
		return view('boyarcaviar::frontpage.checkout');
	}

	public function checkoutSave(Request $request) {

		$user = Auth::user();
		$address = new \Kwidoo\BoyarCaviar\Models\Address;
		if (Auth::check()){
			$address->user_id = $user->id;
	    }	
	    $address->firstname = $request->firstname;
	    $address->lastname = $request->lastname;
	    $address->email = $request->email;
		$address->phone = $request->phone;
		$address->shipping = $request->shipping;
		$address->billing = $request->billing;
		$address->save();


		$invoice = new \Kwidoo\BoyarCaviar\Models\Invoices;
		$invoice->address_id = $address->id;
		$invoice->number = md5(rand(0,100000));
		
		$result = [];
		foreach (Cart::content() as $row) {
			$result[] = $row;
		}
		$invoice->cart  =json_encode($result);
		$invoice->save();

		Cart::store($invoice->number);
		Cart::destroy();
		Mail::to([$request->email,'info@boyarcaviar.eu', 'boyarcaviar@gmail.com'])->send(new OrderCreated($invoice));
		return redirect()->route('invoice',['id' => $invoice->id]);
	}

	public function invoice(Request $request){
		$invoice = \Kwidoo\BoyarCaviar\Models\Invoices::find($request->id);
		return view('boyarcaviar::frontpage.invoice', ['invoice' => $invoice]);
	}

	public function sturgeon() {
		return view('boyarcaviar::frontpage.sturgeon');
	}

	public function classic() {
		return view('boyarcaviar::frontpage.classic');
	}

	public function royal() {
		return view('boyarcaviar::frontpage.royal');
	}

	public function sevruga() {
		return view('boyarcaviar::frontpage.sevruga');
	}
	public function beluga() {
		return view('boyarcaviar::frontpage.beluga');
	}

	public function downloadPdf(Request $request){
		$invoice = \Kwidoo\BoyarCaviar\Models\Invoices::find($request->id);
		$pdf = PDF::loadView('boyarcaviar::pdf.invoice', ['invoice' => $invoice]);
		return $pdf->stream('invoice.pdf');
	}
	
}
