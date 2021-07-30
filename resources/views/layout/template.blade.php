<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.partials.main-style')

    @yield('styles')
    <title>@yield('title','alan')</title>
</head>
<body>
@include('layout.partials.header')

@yield('content')

@include('layout.partials.footer')



@include('layout.partials.main-script')

@yield('scripts')
</body>
</html>
