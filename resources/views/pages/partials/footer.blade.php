<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="{{ asset('assets/docs/5.1/assets/brand/favicon.png') }}" alt="" width="24"
                height="24">
            <small class="d-block mb-3 text-muted">&copy; {{ date('Y') }}</small>
        </div>

        <div class="col-6 col-md">
            <h5>Results</h5>
            <ul class="list-unstyled text-small">
                @if (App\Models\Electioncontrol::find(1)->electioncontrol == 2)
                    <li class="mb-1"><a class="link-secondary text-decoration-none"
                            href="{{ route('vote.result') }}">View Results</a></li>
                @else
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">View Results</a>
                    </li>
                @endif

            </ul>
        </div>

    </div>
</footer>
