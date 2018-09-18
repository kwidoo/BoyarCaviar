<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Boyar Caviar</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/css/caviar.css') }}" rel="stylesheet">


</head>
<body >
    <div class="col-md-10 ml-auto mr-auto mt-0">
        @include('boyarcaviar::partials.header')
        @include('boyarcaviar::partials.menu')
        <div class="container">
            @yield('content')
        @include('boyarcaviar::partials.footer')
        </div>

    </div>
    <script src="{{ asset('/js/caviar.js') }}"></script>  
</body>
</html>
