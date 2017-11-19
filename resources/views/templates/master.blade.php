<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('templates.header')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    @include('templates.nav')

    @yield('contenido')

    @include('templates.footer')
</body>
</html>