@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Election Results</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Election Results</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Votes by Candidate

        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                    <tr>
                        <th>Candidate</th>
                        <th class="text-center">Office</th>
                        <th class="text-center">Total Votes</th>

                    </tr>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($offices as $office)
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
@endsection
