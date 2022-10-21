@section('navbar')
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark @if (auth()->check()) bg-dark @else bg-info @endif">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnew"
                aria-controls="navbarnew" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarnew">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="login"><i class="fas fa-sign-in-alt"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new_user"><i class="fas fa-user-plus"></i> Signup</a>
                        </li>
                        @endguest @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-user"></i>
                                {{ Auth::user()->first_name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}"><i class="far fa-id-badge"></i></i>
                                    Profile</a>
                                <a class="dropdown-item" href="{{ url('contactm') }}"><i class="fas fa-envelope-open-text"></i>
                                    Messages</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i>
                                    Logout</a>
                            </div>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </header>
@endsection
