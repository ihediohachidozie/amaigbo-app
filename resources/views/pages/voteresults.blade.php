<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        @include('pages.partials.header')

        <main>

            @foreach ($offices as $office)
                <div class="card mb-3">
                    <h5 class="card-header text-center text-capitalize">{{ $office->name }} Candidates</h5>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($candidates as $candidate)
                                @if ($office->id == $candidate->nomination->office->id)
                                    <div class="col-md-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="{{ asset('storage/' . $candidate->nomination->image) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body text-center">
                                                <p class="card-text text-capitalize">{{ $candidate->name }}</p>
                                                <p>Vote(s): <span
                                                        class="text-primary">{{ $candidate->votes_count }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach



        </main>

        @include('pages.partials.footer')
    </div>



</body>

</html>
