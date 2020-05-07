<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.13.0/css/pro.min.css">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Módulo admin</title>
</head>

<body>
    @include('web.partials.nav-header-main')
    <div class="container mb-3 mt-3" id="app">
        @yield('content')
    </div>
    @include('web.partials.footer-main')
    <script src="{{ asset("js/app.js") }}"></script>
</body>

</html>
