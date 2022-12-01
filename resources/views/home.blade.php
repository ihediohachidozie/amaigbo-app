@extends('layouts.home')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">{{$members->count()}} Members</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('members.index')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">{{$candidates->count()}} Candidates</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('candidates.list')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">{{$accreditated}} Accreditated Voters</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">{{$vote}} Actual Voters</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Election Action Controls
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">

                            @if ($electioncontrol->electioncontrol == 0)


                            <a class="btn btn-primary float-start" href="{{route('startelection')}}">Start Election</a>
                            @elseif ( $electioncontrol->electioncontrol == 1 )
                            <a class="btn btn-success float-start" href="#">Election Started </a>
                            @else
                            <a class="btn btn-success float-start" href="#">Election Started </a>
                            @endif
                        </div>
                        <div class="col-xl-4">
                            @if ($electioncontrol->electioncontrol == 1)


                            <a class="btn btn-danger float-start" href="{{route('endelection')}}">Stop Election</a>
                            @elseif($electioncontrol->electioncontrol == 2)
                            <a class="btn btn-warning float-start" href="#">Election Ended</a>

                            @else
                            <a class="btn btn-danger float-start" href="#">Stop Election</a>

                            @endif

                        </div>
                        <div class="col-xl-4">

                            <a class="btn btn-info float-start" href="{{route('reset')}}">Reset</a>



                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Percentage Participation
                </div>
                <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart of Participation
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Members

        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr class="text-center">
                        <th>S/N</th>
                        <th>Name</th>
                        <th class="text-center">Membership ID</th>

                        <th class="text-center">VEN</th>

                        <th class="text-center">Accredited</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Membership ID</th>

                        <th>VEN</th>

                        <th>Accredited</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td class="text-center">{{$member->regno}}</td>


                        <td class="text-center">{{$member->pin}}</td>

                        <td class="text-center">{{$member->accreditated == 1 ? 'Yes' : 'No'}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
