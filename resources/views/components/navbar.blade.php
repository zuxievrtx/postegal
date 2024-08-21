<!-- resources/views/components/navbar.blade.php -->
<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
        <h1 class="logo me-auto">
            <a href="#home">
                <img src="{{ asset('assets/img/logopos.png') }}" alt="" class="img-fluid" />
            </a>
        </h1>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mynavbar"
            aria-controls="mynavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#Why">
                        <i class="fas fa-search"></i> Why Us?
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">
                        <i class="fas fa-address-book"></i> Service
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="galleryDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="galleryDropdown">
                        <li><a class="dropdown-item" href="/office">Office</a></li>
                        <li><a class="dropdown-item" href="/galery">Our Gallery</a></li>
                        <li><a class="dropdown-item" href="/#Q&A">Q&A</a></li>
                        <li><a class="dropdown-item" href="/#from">From Us</a></li>
                    </ul>
                </li>
                @if(backpack_auth()->check())
                <li class="nav-item">
                    <a class="nav-link btn rounded-pill dashboard-btn" href="{{ backpack_url('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link btn rounded-pill login-btn" href="{{ backpack_url('login') }}">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn rounded-pill signup-btn" href="{{ backpack_url('register') }}">
                        <i class="fas fa-user-plus"></i> Sign Up
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>