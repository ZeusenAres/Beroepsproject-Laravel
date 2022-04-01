<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <div class="category-box">
        {{ $products->name }}<br />
        <img src="{{url($products->image)}}" /><br />
        €{{ $products->price }}<br />
        {{ $products->description }}<br />
    </div>
</body>
</html>
