@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Candidates</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Candidates
                <a class="btn btn-primary float-end" href="{{route('nomination.create')}}">Add Candidate</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Office</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Nomination Form</th>
                            <th scope="col" class="text-center">Resume</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidates as $candidate)

                        <tr>
                            <th scope="row">{{$candidate->member->name}}</th>
                            <td>{{strtoupper($candidate->office->name)}}</td>
                            <td class="w-25 text-center">
                                <a href="{{asset('storage/'.$candidate->image)}}" target="blank">

                                    <img src="{{asset('storage/'.$candidate->image)}}" class="img-fluid img-thumbnail" style="width: 25%"  alt="Sheep">
                                </a>
                            </td>
                            <td class="text-center"><a href="{{asset('storage/'.$candidate->nominationform)}}" target="blank">view form</a></td>
                            <td class="text-center"><a href="{{asset('storage/'.$candidate->resume)}}" target="blank">view cv</a></td>

                            <td class="text-center">
                                <a href="{{route('nomination.edit', $candidate->id)}}"><i class="fa-solid fa-pen-to-square "></i></a>
                                <form action="{{route('nomination.destroy', $candidate->id)}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <button class="btn" type="submit"><i class="fa-solid fa-trash-can" style="color:red"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
