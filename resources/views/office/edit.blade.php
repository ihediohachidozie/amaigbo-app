@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Elective Position</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Update Elective Position
            <a class="btn btn-primary float-end" href="{{route('offices.index')}}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('offices.update', $office)}}" method="post">
                @csrf

                @include('office.form')

                @method('put')
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
