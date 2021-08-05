@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pb-5 pt-2">
        <div class="col-lg-12" >
            <div class="d-flex justify-content-between pb-2">
                <h4>Students </h4>
                <button class="btn btn-primary" href="/task/create">Add New Student</button>
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
                @foreach($students as $student)
                    <tr>
                        <th>{{ $student->id }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->school_id }}</td>
                        <td>{{ $student->classroom_id }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
