<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'LSAPP') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    
    <link rel="stylesheet" href="http://bootswatch.com/sandstone/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

    @include('inc/navbar')    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
