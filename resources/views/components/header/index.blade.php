<nav class="navbar fixed-top navbar-expand-xl navbar-tus bg-primary">
    <div class="container">
        {{-- Navbar Brand --}}
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
            <div class="d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/logo_surabaya.png') }}" alt="Logo Surabaya" height="50">
                {{-- <h5 class="ms-2 me-4 text-white" style="margin-bottom: 3px;">Kelurahan
                    {{ env('WEB_NAME') }}
                </h5> --}}
            </div>
        </a>

        {{-- Navbar Toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar Collapse --}}
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <hr class="d-xl-none text-white">
            @include('components.header.menus')
            <hr class="d-xl-none text-white">
            <ul class="navbar-nav ms-md-auto">
                @include('components.header.social_media')
                <hr class="d-xl-none text-white">
                @include('components.header.color_modes')
            </ul>
            <div class="d-xl-none mb-2"></div>
        </div>
    </div>
</nav>
