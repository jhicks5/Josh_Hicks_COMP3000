@extends('layouts.app')

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
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
                        <a class="nav-link active" href="/register">+ New User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/newclass">+ New Class</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-between">
                <h4>Register</h4>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">School ID</label>

                            <div class="col-md-6">
                                <input id="school_id" type="school_id" class="form-control @error('school_id') is-invalid @enderror" name="school_id" value="{{ old('school_id') }}" autocomplete="school_id">

                                @error('school_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="classroom_id" class="col-md-4 col-form-label text-md-right">Class ID</label>

                            <div class="col-md-6">
                                <input id="classroom_id" type="classroom_id" class="form-control @error('classroom_id') is-invalid @enderror" name="classroom_id" value="{{ old('classroom_id') }}" autocomplete="classroom_id">

                                @error('classroom_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">Select account type</label>

                            <div class="col-md-6">
                                <select id="role" type="role" class="form-select-lg @error('role') is-invalid @enderror" name="role" autocomplete="role" aria-label="Select Role">
                                    <option selected>Select account type</option>
                                    <option value=0>Admin</option>
                                    <option value=1>Student</option>
                                    <option value=2>Teacher</option>
                                </select>

                                @error('role')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        setInterval(function(){$(".alert").alert('close')},3000);
    </script>
@endsection
