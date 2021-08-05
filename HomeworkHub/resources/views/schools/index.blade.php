@extends('layouts.app')

@section('content')
    <div class="container pt-lg-4">
        <div class="row">
            <div class="col-lg-8" >
                <div class="pb-2">
                    <h4>Classes for {{ auth()->User()->name }}</h4>
                </div>
                <div class="list-group">
                    @foreach($school->classroom as $class )
                        @if($class->id == auth()->user()->classroom_id)
                            <a href="/classroom/{{ $class->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 col-6">Class {{ $class->id }}: {{ $class->classname }}</h5>
                                    <svg class="bi bi-chevron-right col-1" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                                </div>
                                <h6 class="pl-3">Subject: Placeholder</h6>
                            </a>
                        @elseif($class->id !== auth()->user()->classroom_id)
                            @continue
                        @endif
                    @endforeach
                </div>

                <div class="pb-2 pt-5">
                    <h4>Other classes in {{ $school->name }}</h4>
                </div>
                <div class="list-group">
                    @foreach($school->classroom as $class )
                        @if($class->id !== auth()->user()->classroom_id)
                            <a href="/classroom/{{ $class->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1 col-6">Class {{ $class->id }}: {{ $class->classname }}</h5>
                                    <svg class="bi bi-chevron-right col-1" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                                </div>
                                <h6 class="pl-3">Subject: Placeholder</h6>
                            </a>
                        @elseif($class->id == auth()->user()->classroom_id)
                            @continue
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                <h4>Screen Time</h4>
                <label>Daily / 3 Hrs</label>
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">3 / 3 Hours</div>
                </div>
                <label class="pt-2">Weekly / 21 Hrs</label>
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">10 / 21 Hours</div>
                </div>
                <label class="">Monthly / 84 Hrs</label>
                <div class="progress" style="height: 30px;">
                    <div class="progress-bar bg-success text-dark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20 / 84 Hours</div>
                </div>
            </div>
        </div>
    </div>
@endsection

