@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Members</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Members
            <a class="btn btn-primary float-end" href="{{route('members.create')}}">Add Member</a>
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
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Membership ID</th>

                        <th>VEN</th>

                        <th>Accredited</th>
                        <th colspan="2">Action</th>
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
                        <td class="d-flex align-items-center justify-content-between px-4">
                            <a href="{{route('members.edit', $member)}}"><i class="fa-solid fa-pen-to-square "></i></a>
                            <form action="{{route('members.destroy', $member)}}" method="post">
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
