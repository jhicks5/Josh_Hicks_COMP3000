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
                        <a class="nav-link" href="/admin/teachers">Teachers</a>
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
                        <a class="nav-link active" href="/admin/newclass">+ New Class</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-between">
                <h4>New Class</h4>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Class') }}</div>

                <div class="card-body">
                    <form action="/admin/store" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">School ID</label>

                            <div class="col-md-6">
                                <input id="school_id" type="text" class="form-control @error('school_id') is-invalid @enderror" name="school_id" value="{{ old('school_id') ?? auth()->User()->school_id }}" autofocus>

                                @error('school_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="classname" class="col-md-4 col-form-label text-md-right">Class Name</label>

                            <div class="col-md-6">
                                <input id="classname" type="text" class="form-control @error('classname') is-invalid @enderror" name="classname" value="{{ old('classname') }}" autofocus>

                                @error('classname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
