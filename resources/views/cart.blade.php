<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <?php
    $cart = [$content];
    while(count($cart) >= 1)
    {
        array_push($cart);
    }
    print_r($cart);
    ?>
</body>
</html>
