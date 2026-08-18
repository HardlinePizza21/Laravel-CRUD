<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
</head>

<body class="app-body">
    <nav class="navbar navbar-expand-lg app-navbar">
        <div class="container">
            <a class="navbar-brand app-brand" href="{{ route('home.index') }}">Online Store</a>

            <div class="navbar-nav ms-auto app-nav">
                <a class="nav-link app-nav-link" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link app-nav-link" href="https://github.com/HardlinePizza21" target="_blank">About</a>
            </div>
        </div>
    </nav>

    <main class="page-main">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>
