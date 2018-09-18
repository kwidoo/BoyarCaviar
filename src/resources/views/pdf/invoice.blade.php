@extends('boyarcaviar::layouts.pdf')

@section('title', 'Premium Black Caviar')

@section('content')
<br>
<br>
    <table>
        <tr>
            <td width="40%" style="vertical-align: top;">
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
        </td>
        <td width="20%">&nbsp;
        </td>
        <td width="40%" style="vertical-align: top;">
            To:<br>
            <strong>{{ $invoice->address()->get()->last()->firstname }}&nbsp;
            {{ $invoice->address()->get()->last()->lastname }}</strong><br>
            <br>
            <strong>Billing Address:</strong><br>
            {{$invoice->address()->get()->last()->billing}}<br>
            <br>
            E-mail: {{$invoice->address()->get()->last()->email }}<br>
            Phone: {{$invoice->address()->get()->last()->phone }}<br>
            <br>
            <strong>Shipping Address:</strong><br>
            {{$invoice->address()->get()->last()->shipping}}<br>

        </td>
    </tr>
	</table>
	<table style="width:100%">
    <tr>
    	<td colspan="2" align="center">
            <p>	<strong>Invoice Nr. {{ $invoice->id }}</strong> <br>
                Date: {{ date('d-m-Y', strtotime($invoice->created_at)) }}<br>
                Payment Method: Wire Transfer
                </p>
        </td>
    </tr>
	</table>
    <table style="width:100%">
    	<tr>
    		<th width="70%">&nbsp;&nbsp;Name</th>
    		<th  style="text-align: right" width="10%">Quantity</th>
    		<th  style="text-align: right" width="10%">Price</th>
    		<th  style="text-align: right" width="10%">Total</th>
    	</tr>

  
        <?php $price = 0; ?>
        @foreach ( json_decode($invoice->cart) as $row)
        	<tr>
                <td>{{$loop->index+1}}.&nbsp;&nbsp;{{$row->name}}&nbsp;{{$row->options->type}}&nbsp;{{$row->options->size}}</td>
                <td style="text-align: right">&nbsp;{{$row->qty}}</td>
                <td style="text-align: right">&nbsp;{{number_format($row->price,2)}} €</td>
                <td style="text-align: right">&nbsp;{{number_format($row->price*$row->qty,2)}} €</td>
                <?php $price += $row->price * $row->qty; ?>
        @endforeach 
       	</tr>
    </table>
    <br>
    <hr>
    <br>
    <table style="width:100%">
    	<tr>
            <td style="width:60%">
            </td>
    		<td style="width:20%;text-align:right;">
               Sub Total: 
            </td>
            <td style="width:20%;text-align:right;">
                {{ number_format($price-50,2) }} €
            </td>
        </tr>
   		<tr>
            <td style="width:60%">
            </td>    		
            <td style="width:20%;text-align:right;">
                Shipping: 
            </td>
            <td style="width:20%;text-align:right;">
                50.00 €
            </td>
        </tr>   		
        <tr>
            <td style="width:60%">
            </td>           
             <td style="width:20%;text-align:right;">
                Taxes:
            </td>
            <td style="width:20%;text-align:right;">
                0.00 €
            </td>

        </tr>
   		<tr>
            <td style="width:60%">
            </td>    		
            <td style="width:20%;text-align:right;">
                <strong> Total:</strong>
            </td>
            <td style="width:20%;text-align:right;">
                <strong> {{ number_format($price,2) }} €</strong>
            </td>
        </tr>                  
    </table>   
        
@endsection