<nav class="header">
    @include('Stylesheets.stylesheets')
    <a href="{{url('')}}"><img src="images/logotransparent.png" width="100" height="100" /></a>
    <a href="{{url('')}}">Home</a>
    <div class="dropdown">
        <p>Assortment</p>
        <div class="dropdown-content">
            @foreach($categories as $category)
                {{ $category->name }}
            @endforeach
        </div>
    </div>
    <a href="{{url('contact')}}">Contact</a>
    <a href="{{url('cart')}}"><img src="images/shoppingcart.png" width="25" height="25"/></a>
</nav>
