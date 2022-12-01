@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Elective Positions</h1>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                All Elective Positions
                <a class="btn btn-primary float-end" href="{{ route('offices.create') }}">Add Office</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr class="text-center">
                            <th>S/N</th>
                            <th>Office</th>

                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>S/N</th>
                            <th>Office</th>

                            <th colspan="2">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($offices as $office)
                            <tr>
                                <td>{{ $office->id }}</td>
                                <td>{{ucwords($office->name) }}</td>
                                <td class="d-flex align-items-center justify-content-between px-4">
                                    <a href="{{ route('offices.edit', $office) }}"><i
                                            class="fa-solid fa-pen-to-square "></i></a>
                                    <form action="{{ route('offices.destroy', $office) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <button class="btn" type="submit"><i class="fa-solid fa-trash-can"
                                                style="color:red"></i></button>
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
