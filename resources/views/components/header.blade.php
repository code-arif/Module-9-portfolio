<nav class="navbar navbar-expand-lg">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="{{ route('display.home') }}" class="navbar-brand mx-auto mx-lg-0">CODEARIF</a>

        {{-- <div class="d-flex align-items-center d-lg-none">
            <i class="navbar-icon bi-telephone-plus me-3"></i>
            <a class="custom-btn btn" href="{{ route('show.contact') }}">
                Hire me
            </a>
        </div> --}}

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('display.home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('show.about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('show.services') }}">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('show.project') }}">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="{{ route('show.contact') }}">Contact</a>
                </li>
            </ul>

            <div class="d-lg-flex align-items-center d-none ms-auto">
                {{-- <i class="navbar-icon bi bi-envelope me-3"> </i> --}}
                <a class="navbar-icon me-3" href="mailto:arifulislam6460@gmail.com"> <i class=" bi bi-envelope">
                    </i> </a>
                <a class="custom-btn btn" href="{{ route('show.contact') }}">
                    Hire me
                </a>
            </div>
        </div>

    </div>
</nav>
