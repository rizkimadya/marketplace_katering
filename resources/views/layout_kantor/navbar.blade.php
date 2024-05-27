<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Marketplace Catering</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="menu.html" class="nav-link">Specialties</a></li>
                <li class="nav-item"><a href="reservation.html" class="nav-link">Reservation</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Stories</a></li>
                @if ($title === 'Login')
                    <li class="nav-item"><a href="{{ url('/regis') }}" class="nav-link btn btn-primary">Registrasi</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link btn btn-primary">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
