<nav class="header">
    @include('Stylesheets.stylesheets')
    <a href="{{url('')}}"><img src="images/logotransparent.png" width="100" height="100" /></a>
    <a href="{{url('')}}">Home</a>
    <p>Assortment</p>
    @foreach($categories as $category)
        {{ $category->name }}
    @endforeach
    <a href="{{url('contact')}}">Contact</a>
    <a href="{{url('cart')}}"><img src="images/shoppingcart.png" width="25" height="25"/></a>
</nav>
