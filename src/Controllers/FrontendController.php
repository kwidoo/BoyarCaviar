<?php

namespace Kwidoo\BoyarCaviar\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Cart;
use Kwidoo\BoyarCaviar\Requests\CheckoutRequest;
use Auth;

class FrontendController extends Controller
{

	public function index(){

		return view('boyarcaviar::frontpage.main');
	}

	public function buy(Request $request){
		Cart::add($request->product_id, $request->name, $request->qty, $request->price, ['size' => $request->size, 'type' => $request->type, 'image' => $request->image]);
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

	public function empty() {
		Cart::destroy();
		return view('boyarcaviar::frontpage.cart');		
	}

	public function checkout() {
		return view('boyarcaviar::frontpage.checkout');
	}

	public function checkoutSave(Request $request) {

		$user = Auth::user();
		$address = new \App\Address;
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


		$invoice = new \App\Invoices;
		$invoice->address_id = $address->id;
		$invoice->number = md5(rand(0,100000));
		
		$result = [];
		foreach (Cart::content() as $row) {
			$result[] = $row;
		}
		$invoice->cart  =json_encode($result);
		$invoice->save();

		Cart::destroy();
		return redirect()->route('invoice',['id' => $invoice->id]);
	}

	public function invoice(Request $request){
		$invoice = \App\Invoices::find($request->id);
		return view('boyarcaviar::frontpage.invoice')->with('invoice', $invoice);
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
}
