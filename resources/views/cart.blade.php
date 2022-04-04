<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    @foreach(Session::get('cart') as $cart)
        {{ $cart }}<br />
    @endforeach
    </body>
</html>
