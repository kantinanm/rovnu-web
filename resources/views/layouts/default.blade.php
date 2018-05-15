<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title')</title>

    @yield('css_script')
</head>
<body>

@yield('content')
@include('includes.footer')
@yield('js_plugin')
</body>
</html>