<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('/frontend/assets/css/style.css') }}" />
    @stack('stylesheets')
</head>

<body>
    <!-- navbar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" data-aos="fade-down">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/frontend/assets/img/logo.jpeg" alt="Logo" width="100" />
            </a>
            <a class="navbar-brand" href="#">Daisy Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}"><i
                                class="fa-solid fa-house"></i>
                            Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#skin-care">Skin Care</a>
                            </li>
                            <li><a class="dropdown-item" href="#make-up">Make Up</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#discount"><i class="fa-solid fa-percent"></i> Discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fa-regular fa-id-card"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('about_us') ? 'active' : '' }}"
                            href="{{ route('about_us') }}"><i class="fa-solid fa-shop"></i> About Us</a>
                    </li>
                    <!-- Cart Icon with Badge -->
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="card.html">
                            <i class="fa-solid fa-shopping-cart fa-lg"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                id="cart-count">
                            </span>
                        </a>
                    </li>
                </ul>
                <form class="d-flex ms-3" data-aos="fade-left">
                    <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search" />
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            {{-- signin and profile part --}}
            <div class="d-flex ms-3">
                @auth
                    <a href="{{ route('s.dashboard') }}" class="btn btn-outline-primary me-2">
                        <i class="fa-solid fa-store"></i>
                        @if (Auth::user()->role === 'seller')
                            Seller Dashboard
                        @elseif(Auth::user()->role === 'customer')
                            Customer Dashboard
                        @endif
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline" id="logout-form">
                        @csrf
                    </form>
                    <button type="button"
                        onclick="event.preventDefault(); setTimeout(function(){ $('#logout-form').submit(); }, 2000);"
                        class="logoutButton logoutButton--dark"
                        style="--figure-duration: 100; --transform-figure: none; --walking-duration: 100; --transform-arm1: none; --transform-wrist1: none; --transform-arm2: none; --transform-wrist2: none; --transform-leg1: none; --transform-calf1: none; --transform-leg2: none; --transform-calf2: none;">
                        <svg class="doorway" viewBox="0 0 100 100">
                            <path
                                d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z">
                            </path>
                            <path class="bang"
                                d="M40.5 43.7L26.6 31.4l-2.5 6.7zM41.9 50.4l-19.5-4-1.4 6.3zM40 57.4l-17.7 3.9 3.9 5.7z">
                            </path>
                        </svg>
                        <svg class="figure" viewBox="0 0 100 100">
                            <circle cx="52.1" cy="32.4" r="6.4"></circle>
                            <path
                                d="M50.7 62.8c-1.2 2.5-3.6 5-7.2 4-3.2-.9-4.9-3.5-4-7.8.7-3.4 3.1-13.8 4.1-15.8 1.7-3.4 1.6-4.6 7-3.7 4.3.7 4.6 2.5 4.3 5.4-.4 3.7-2.8 15.1-4.2 17.9z">
                            </path>
                            <g class="arm1">
                                <path
                                    d="M55.5 56.5l-6-9.5c-1-1.5-.6-3.5.9-4.4 1.5-1 3.7-1.1 4.6.4l6.1 10c1 1.5.3 3.5-1.1 4.4-1.5.9-3.5.5-4.5-.9z">
                                </path>
                                <path class="wrist1"
                                    d="M69.4 59.9L58.1 58c-1.7-.3-2.9-1.9-2.6-3.7.3-1.7 1.9-2.9 3.7-2.6l11.4 1.9c1.7.3 2.9 1.9 2.6 3.7-.4 1.7-2 2.9-3.8 2.6z">
                                </path>
                            </g>
                            <g class="arm2">
                                <path
                                    d="M34.2 43.6L45 40.3c1.7-.6 3.5.3 4 2 .6 1.7-.3 4-2 4.5l-10.8 2.8c-1.7.6-3.5-.3-4-2-.6-1.6.3-3.4 2-4z">
                                </path>
                                <path class="wrist2"
                                    d="M27.1 56.2L32 45.7c.7-1.6 2.6-2.3 4.2-1.6 1.6.7 2.3 2.6 1.6 4.2L33 58.8c-.7 1.6-2.6 2.3-4.2 1.6-1.7-.7-2.4-2.6-1.7-4.2z">
                                </path>
                            </g>
                            <g class="leg1">
                                <path
                                    d="M52.1 73.2s-7-5.7-7.9-6.5c-.9-.9-1.2-3.5-.1-4.9 1.1-1.4 3.8-1.9 5.2-.9l7.9 7c1.4 1.1 1.7 3.5.7 4.9-1.1 1.4-4.4 1.5-5.8.4z">
                                </path>
                                <path class="calf1"
                                    d="M52.6 84.4l-1-12.8c-.1-1.9 1.5-3.6 3.5-3.7 2-.1 3.7 1.4 3.8 3.4l1 12.8c.1 1.9-1.5 3.6-3.5 3.7-2 0-3.7-1.5-3.8-3.4z">
                                </path>
                            </g>
                            <g class="leg2">
                                <path
                                    d="M37.8 72.7s1.3-10.2 1.6-11.4 2.4-2.8 4.1-2.6c1.7.2 3.6 2.3 3.4 4l-1.8 11.1c-.2 1.7-1.7 3.3-3.4 3.1-1.8-.2-4.1-2.4-3.9-4.2z">
                                </path>
                                <path class="calf2"
                                    d="M29.5 82.3l9.6-10.9c1.3-1.4 3.6-1.5 5.1-.1 1.5 1.4.4 4.9-.9 6.3l-8.5 9.6c-1.3 1.4-3.6 1.5-5.1.1-1.4-1.3-1.5-3.5-.2-5z">
                                </path>
                            </g>
                        </svg>
                        <svg class="door" viewBox="0 0 100 100">
                            <path
                                d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z">
                            </path>
                            <circle cx="66" cy="50" r="3.7"></circle>
                        </svg>
                        <span class="button-text">Log Out</span>
                    </button>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">
                        <i class="fa-solid fa-right-to-bracket"></i> Sign In
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-outline-success">
                        <i class="fa-solid fa-user-plus"></i> Sign Up
                    </a>
                @endauth
            </div>
        </div>
    </nav>
    <!--navbar end-->
    <main>
        @yield('content')
    </main>
    <!--footer start-->
    <footer class="bg-dark p-3 text-white text-center">
        <p>Copyright &copy; Daisy Store</p>
    </footer>
    <!--footer  end-->
    <script src="{{ asset('/frontend/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/frontend/assets/js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('/frontend/assets/js/script.js') }}"></script>
    @stack('scripts')
</body>

</html>
