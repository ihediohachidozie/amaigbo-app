<?php
$page = $_SERVER['PHP_SELF'];
$sec = '10';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="<?php echo $sec; ?>;URL='{{ route('statistics') }}'">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Amaigbo Unity Forum</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/docs/5.1/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/docs/5.1/assets/img/favicons/apple-touch-icon.png') }}"
        sizes="180x180">
    <link rel="icon" href="{{ asset('assets/docs/5.1/assets/img/favicons/favicon-32x32.png') }}" sizes="32x32"
        type="image/png">
    <link rel="icon" href="{{ asset('assets/docs/5.1/assets/img/favicons/favicon-16x16.png') }}" sizes="16x16"
        type="image/png">
    <link rel="manifest" href="{{ asset('assets/docs/5.1/assets/img/favicons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('assets/docs/5.1/assets/img/favicons/safari-pinned-tab.svg') }}"
        color="#7952b3">
    <link rel="icon" href="{{ asset('assets/docs/5.1/assets/img/favicons/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/pricing.css') }}" rel="stylesheet">
</head>

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
            <div class="py-2">

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                 Percentage Participation
                            </div>
                            <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Participation Activity in Bar Chart
                            </div>
                            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                        </div>
                    </div>
                </div>
                @if (App\Models\Electioncontrol::find(1)->electioncontrol == 2)

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Votes per office
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>Office</th>
                                            <th class="text-center">Votes</th>

                                        </tr>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($votesbyoffice as $key => $value)
                                            <tr>
                                                <td>{{ ucwords($office[$key]) }}</td>
                                                <td class="text-center">{{ $value }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Votes per Candidate
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>Candidate</th>
                                            <th class="text-center">Office</th>
                                            <th class="text-center">Votes</th>

                                        </tr>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($officex as $office)
                                        @foreach ($candidates as $candidate)
                                        @if ($office->id == $candidate->nomination->office->id)
                                            <tr>
                                                <td>{{ ucwords($candidate->name) }}</td>
                                                <td class="text-center">{{ucwords($candidate->nomination->office->name)}}</td>
                                                <td class="text-center">{{ $candidate->votes_count }}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Votes per office
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>Office</th>
                                            <th class="text-center">Votes</th>

                                        </tr>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($votesbyoffice as $key => $value)
                                            <tr>
                                                <td>{{ ucwords($office[$key]) }}</td>
                                                <td class="text-center">{{ $value }}</td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                @endif

            </div>

        </main>

        @include('pages.partials.footer')
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/chart-area-demo.js') }}"></script>
@include('pages.partials.votestat')
@include('pages.partials.participation')
{{-- <script src="{{ asset('js/chart-bar-demo.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/datatables-simple-demo.js') }}"></script>

</html>
