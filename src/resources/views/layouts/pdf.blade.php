<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>@yield('title') | Boyar Caviar</title>


</head>
<body >
    <img src="{{ public_path('/img/logo.png')}}" width="100" />
 
            @yield('content')
        
</body>
</html>
