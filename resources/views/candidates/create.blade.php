@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">New Candidate</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Add Candidate
                <a class="btn btn-primary float-end" href="{{ route('candidates.list') }}">Back</a>
            </div>
            <div class="card-body">


                <div class="row row-cols-1 mb-3">
                    <form action="{{ route('nomination.store') }}" method="post" class="mb-4"
                        enctype="multipart/form-data">
                        @csrf

                        @include('candidates.form')
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Add Candidate</button>

                        </div>

                    </form>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection
