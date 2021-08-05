@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row pb-5 pt-2">
        <div class="col-lg-12" >
            <div class="pb-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/students">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/teachers">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/admins">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">+ New User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/newclass">+ New Class</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-between pb-2">
                <h4>Teachers </h4>
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
