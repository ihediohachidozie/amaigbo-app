@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit Member</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Update Member
            <a class="btn btn-primary float-end" href="{{route('members.index')}}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{route('members.update', $member)}}" method="post">
                @csrf

                @include('members.form')

                @method('put')
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
