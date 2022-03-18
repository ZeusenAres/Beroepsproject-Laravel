<!DOCTYPE html>
<html>
<head>
    @include('Stylesheets.stylesheets')
</head>
<body>
    @include('Header.header')
    <div class="homebox margin">
        welc

        @foreach ($categories as $category)
            {{ $category->name }}
        @endforeach
    </div>
</body>
</html>
