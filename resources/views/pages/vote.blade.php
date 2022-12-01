<!doctype html>
<html lang="en">

@include('pages.partials.head')

<body>

    <div class="container py-3">
        @include('pages.partials.header')

        <main>
            <form method="POST" action="{{ route('vote.store') }}">
                @csrf
                <input type="hidden" name="voter_id" value="{{ $voter_id }}">

                @foreach ($elected_offices as $office)
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="text-center">
                                <h3>{{ strtoupper($offices[$office]) }}</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('pages.candidates')
                        </div>
                    </div>
                @endforeach

                <button class="w-100 btn btn-primary btn-lg my-4" type="submit">Submit Vote</button>
            </form>
        </main>

        @include('pages.partials.footer')
    </div>

</body>

</html>
