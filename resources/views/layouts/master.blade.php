<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BR & S Food Corner</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/cart.css') }}">

</head>

<body>
    <div class="main-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('fr.home') }}">BR & S Food Corner</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.home') ? 'current' : '' }}"
                            href="{{ route('fr.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.about') ? 'current' : '' }}"
                            href="{{ route('fr.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.menu') ? 'current' : '' }}"
                            href="{{ route('fr.menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.contact') ? 'current' : '' }}"
                            href="{{ route('fr.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.faq') ? 'current' : '' }}"
                            href="{{ route('fr.faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('fr.cart') ? 'current' : '' }}"
                            href="{{ route('fr.cart') }}">Cart</a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- Content -->
        <div class="container mt-4">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; {{ date('Y') }} BR & S Food Corner. All Rights Reserved.</p>
            <p>
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms of Service</a>
            </p>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
