<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyMusic</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.iconly.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
    </div>

    <div id="app">
        @include('partials.sidebar')
        <div id="main">
            @yield('container')
        </div>
    </div>
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
    <script src="{{ asset('assets/js/dark.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
</body>

</html>
