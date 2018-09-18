@extends('boyarcaviar::layouts.frontend')

@section('title', 'Invoice')

@section('content')
    <div class="d-flex flex-row bd-glow-more pt-4 pb-4 p-2">
        <div class="container frame-two">
            <div class="d-flex flex-row">
                <p class="text-white">Your order saved. We will contact with you soon!</p>
            </div>
        {{--}}    <div class="d-flex flex-row">
                <p class="text-white">
                    <strong>Top Masters Commercial LP</strong><br>
                    Company number SL026459<br>
                    Suite 4312 Mitchell House, 5 Mitchell Street, Edinburgh, Scotland, EH6 7BD, United Kingdom<br>
                    <br>
                    OJSC Bakai Bank,<br>
                    Bishkek, Kyrgyz Republic, <br>
                    SWIFT: BAKAKG22
                    Account 1242000600004552
                    <br>
                    Intermediary Bank
                    Landesbank Baden-Wuerttemberg, Stuttgart, Germany, <br>
                    SWIFT: SOLADEST
                    Account 2809395

                    Tālr: +371 29 28 59 78<br>
                    Email: info@boyarcaviar.eu
                </p>
            </div>        
            <div class="d-flex flex-row ">
                <p class="text-white">    Invoice Nr. {{ $invoice->id }} <br>
                    Date: {{ date('d-m-Y', strtotime($invoice->created_at)) }}</p>
            </div>
            <div class="d-flex flex-row w-100">
                <div class="d-flex flex-column text-white w-100 flex-wrap">
                    <div class="d-flex flex-row justify-content-between">
                        <p class="col-2">Name</p>
                        <p class="col-2">Quantity</p>
                        <p class="col-2">Price</p>
                        <p class="col-2">Total</p>
                    </div>
                   @foreach ( json_decode($invoice->cart) as $row)
                        <div class="d-flex flex-row justify-content-between">
                            <p>{{$loop->index+1}}. {{$row->name}}&nbsp;{{$row->options->type}}&nbsp;{{$row->options->size}}</p>
                            <p>&nbsp;{{$row->qty}}</p>
                            <p>&nbsp;{{number_format($row->price,2)}} €</p>
                            <p>&nbsp;{{number_format($row->price*$row->qty,2)}} €</p>
                        </div>
                    @endforeach 
                </div>
          </div> {{--}} 
        </div>            
    </div>

@endsection