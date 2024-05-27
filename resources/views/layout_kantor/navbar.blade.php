<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Marketplace Catering</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">All Menu</a></li>
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Catering</a></li>
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Invoice</a></li>
                @if ($title === 'Login')
                    <li class="nav-item"><a href="{{ url('/regis') }}" class="nav-link btn btn-primary">Registrasi</a>
                    </li>
                @elseif($title === 'Regis' || $title === 'Marketplace Catering' && auth()->user() === null)
                    <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link btn btn-primary">Login</a></li>
                @elseif($title === 'Marketplace Catering' && auth()->user() !== null)
                    <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link btn btn-primary">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
