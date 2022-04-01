<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    @foreach($product as $product)
        <form action="{{url('product')}}" method="dialog">
            <input value="{{ $product->name }}" readonly/><br />
            <img src="{{ $product->image }}" /><br />
            <input value="{{'€' . $product->price }}" readonly/><br />
            <input name="submit" type="submit" value="Add to Cart" />
        </form><br />
        <section>{{ $product->description }}</section>
    @endforeach
</body>
</html>
