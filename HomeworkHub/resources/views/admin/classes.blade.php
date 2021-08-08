@extends('layouts.app')

@section('content')


<div class="container position-relative">
    <div class="row pb-5 pt-2">
        <div class="col-lg-12" >
            <div class="pb-4">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/students">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/teachers">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/admins">Admins</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/classes">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">+ New User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/class/create">+ New Class</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-between pb-2">
                <h4>Classes </h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">School ID</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($classes as $class)
                    <tr>
                        <th>{{ $class->id }}</th>
                        <td>{{ $class->classname }}</td>
                        <td>{{ $class->school_id }}</td>
                        <td>{{ $class->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
