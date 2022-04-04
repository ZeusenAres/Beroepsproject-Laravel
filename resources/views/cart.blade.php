<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <table>
        @foreach(Session::get('cart') as $cartContent)
            @foreach(DB::table('products')->where('id', '=', $cartContent)->get() as $cart)
            <tr class="cart-row">
                <td>
                    <img class="cart-image" src="{{ $cart->image }}" />
                </td>
                <td>
                    {{ $cart->name }}<br />
                </td>
                <td>
                    {{ '€' . $cart->price }}
                </td>
            </tr>
            @endforeach
        @endforeach
    </table>
</body>
</html>
