<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/web-assets/img/logo/Nexus logo1 .png') }}" class="img-fluid logo"
                    alt="logo" srcset=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blogs') }}">Blog</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="{{ url('contact') }}" class="btn btn-gold">Contact Us</a>
                </form>
            </div>
        </div>
    </nav>
</header>