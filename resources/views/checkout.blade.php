<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <h1>Thank you for shopping at Diverse Luxury!</h1>
    {{ '€' . $balance . ',-' }}
    @if($balance != null)
    <?php Session::flush('cart'); ?>
    @endif
</body>
</html>
