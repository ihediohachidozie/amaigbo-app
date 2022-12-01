<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
            <img src="{{ asset('assets/docs/5.1/assets/img/favicons/logo.png') }}" style="max-height: 56px" alt=""
                srcset="">
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">

            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('nomination.index') }}">Nomination Form</a>

            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('accreditation') }}">Vote</a>

            <a class="me-3 py-2 text-dark text-decoration-none" href="{{ route('statistics') }}">Election
                Statistics</a>

            <a class="py-2 text-dark text-decoration-none" href="{{ route('login') }}">Login</a>
        </nav>
    </div>


</header>
