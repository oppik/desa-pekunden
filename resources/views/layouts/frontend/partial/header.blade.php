<nav class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/Picture1.png') }}" alt=" " width="200">
            <img src="{{ asset('assets/image-removebg-preview.png') }}" alt=" " width="80">

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb arSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('info') ? 'active' : '' }}" href="{{ route('info') }}">Info
                        Wisata</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('package*') ? 'active' : '' }}" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Paket Wisata
                    </a>
                    <ul class="dropdown-menu">
                        @forelse (\App\Models\Package::all() as $package)
                            <li><a class="dropdown-item"
                                    href="{{ route('package', $package->id) }}">{{ $package->name }}</a></li>
                        @empty
                            <li><a class="dropdown-item" href="#">Belum Ada Paket Wisata</a></li>
                        @endforelse
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <div class="d-flex">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary"><i class="fas fa-user me-1"></i> Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary" style="padding-top:12px;">
                        <i class="fas fa-user me-1"></i> Admin
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>
