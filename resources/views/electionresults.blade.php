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
                            <th class="text-center">Total Valid Votes</th>
                            <th class="text-center">Total Invalid Votes</th>
                        </tr>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($offices as $office)
                            @foreach ($candidates as $candidate)
                                {{-- @include('pages.getoffice') --}}
                                @if ($office->id == $candidate->office->id)
                                    <tr>
                                        <td>{{ ucwords($candidate->member->name) }}</td>
                                        <td class="text-center">
                                            {{ ucwords($office->name) }}
                                        </td>
                                        <td class="text-center">{{ $candidate->votes_count }}</td>
                                        <td class="text-center">{{ $candidate->fvotes_count }}</td>
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
