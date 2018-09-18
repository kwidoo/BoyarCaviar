@extends('boyarcaviar::layouts.frontend')

@section('title', 'Invoice')

@section('content')
    <div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
        <div class="container frame-two">
            <div class="d-flex flex-row w-100 text-white">
                <h2 class="pt-2 pl-2 text-white">Your order was successfully created.</h2>
            </div>
            <div class="d-flex flex-row w-100 text-white">
                <p clas="text-white">
                    <a class="color-gold" href="{{ route('download.pdf', ['id' => $invoice->id]) }}">Press here to download your invoice
                        <i class="color-gold fa fa-cloud-download fa-2x" aria-hidden="true"></i>
                    </a>
                </p>            
            </div>
            <div class="d-flex flex-row w-100 text-white">
                <p>
                    <strong>Top Masters Commercial LP</strong><br>
                    Company number SL026459<br>
                    Suite 4312 Mitchell House, 5 Mitchell Street,<br>
                    Edinburgh, Scotland, EH6 7BD,<br>
                    United Kingdom<br>
                    <br>
                    Phone: +371 29 28 59 78<br>
                    Email: info@boyarcaviar.eu<br>
                    <a class="text-caviar" href="https://www.boyarcaviar.eu">www.boyarcaviar.eu</a>
                    <br><br>
                    OJSC Bakai Bank,<br>
                    Bishkek, Kyrgyz Republic, <br>
                    SWIFT: BAKAKG22
                    Account 1242000600004552
                    <br>
                    Intermediary Bank
                    Landesbank Baden-Wuerttemberg,<br>
                    Stuttgart, Germany, <br>
                    SWIFT: SOLADEST
                    Account 2809395

                </p>
                <p class="ml-5">
                    To:<br>
                    <strong>{{ $invoice->address()->get()->last()->firstname }}&nbsp;
                    {{ $invoice->address()->get()->last()->lastname }}</strong><br>
                    <br>
                    Billing Address:<br>
                    {{$invoice->address()->get()->last()->billing}}<br>
                    <br>
                    E-mail: {{$invoice->address()->get()->last()->email }}<br>
                    Phone: {{$invoice->address()->get()->last()->phone }}<br>
                    <br>
                    Shipping Address:<br>
                    {{$invoice->address()->get()->last()->shipping}}<br>

                </p>
            </div>        
            <div class="d-flex flex-row w-100 justify-content-center">
                <p class="text-white">Invoice Nr. {{ $invoice->id }} <br>
                    Date: {{ date('d-m-Y', strtotime($invoice->created_at)) }}<br>
                    Payment Method: Wire Transfer
                </p>
            </div>
            <div class="d-flex flex-row w-100 text-white">
                <div class="d-flex flex-column w-100">
                    <div class="d-flex flex-row justify-content-between" style="border-bottom:1px solid white;">
                        <p class="w-25 pl-2">&nbsp;&nbsp;Name</p>
                        <p class="w-25">Quantity</p>
                        <p class="w-25">Price</p>
                        <p class="w-25">Total</p>
                    </div>
                    <?php $price = 0; ?>
                    @foreach ( json_decode($invoice->cart) as $row)
                        <div class="pt-2 d-flex flex-row justify-content-between">
                            <p class="w-25">{{$loop->index+1}}.&nbsp;&nbsp;{{$row->name}}&nbsp;{{$row->options->type}}&nbsp;{{$row->options->size}}</p>
                            <p class="w-25">&nbsp;{{$row->qty}}</p>
                            <p class="w-25">&nbsp;{{number_format($row->price,2)}} €</p>
                            <p class="w-25" >&nbsp;{{number_format($row->price*$row->qty,2)}} €</p>
                            <?php $price += $row->price * $row->qty; ?>
                        </div>
                    @endforeach 
                    <div class="mt-3 d-flex flex-row">
                        <div class="d-flex flex-column w-100 " style="border-top:1px solid white;">
                            <div class="d-flex flex-row justify-content-end">
                                <p class="w-25 pt-3">Sub Total: {{ number_format(($price-50),2) }} €</p>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <p class="w-25">Shipping: 50.00 €</p>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <p class="w-25">Taxes: 0.00 €</p>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                               <p class="w-25">Total: {{ number_format($price,2) }} €</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
@endsection