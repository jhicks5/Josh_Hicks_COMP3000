@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pb-5 pt-2">
        <div class="col-lg-12" >
            <div class="d-flex justify-content-between pb-2">
                <h4>Teachers </h4>
                <button class="btn btn-danger" href="/task/create">Add New Teacher</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">School ID</th>
                        <th scope="col">Class ID</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <th>{{ $teacher->id }}</th>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->school_id }}</td>
                        <td>{{ $teacher->classroom_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
