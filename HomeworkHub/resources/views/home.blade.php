@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-5 pt-2">
        <div class="col-lg-10" >
            <div class="d-flex justify-content-between pb-2">
                <h4>Homework Tasks</h4>
                <button class="btn btn-primary">Add New Task</button>
                <div class="dropdown text-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Date Added</a>
                        <a class="dropdown-item" href="#">Subject</a>
                        <a class="dropdown-item" href="#">Time Left</a>
                    </div>
                </div>
            </div>
            <div class="list-group">
{{--                @foreach($user->tasks as $task)--}}
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
{{--                            <h5 class="mb-1 col-6">{{ $task->title }}</h5>--}}
                            <small class="text-muted col-2">3 days ago</small>
                            <svg class="bi bi-chevron-right col-1" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                        </div>
                        <p class="mb-1 col-6">Complete the attached worksheet.</p>
                    </a>
{{--                @endforeach--}}
            </div>
        </div>
<!--        <div class="col-4">
            <h4>Exam Deadlines</h4>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Literature Test</h5>
                        <small class="text-muted">1 day left</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Statistics Test</h5>
                        <small class="text-muted">10 days left</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Maths Exam 1</h5>
                        <small class="text-muted">43 days left</small>
                    </div>
                </a>
            </div>
        </div>-->
<!--    </div>
    <div class="row">
        <div class="col-4">
            <h4>Screen Time</h4>
            <label>Daily / 3 Hrs</label>
            <div class="progress" style="height: 30px;">
                <div class="progress-bar bg-danger text-dark" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">3 / 3 Hours</div>
            </div>
            <label class="pt-2">Weekly / 21 Hrs</label>
            <div class="progress" style="height: 30px;">
                <div class="progress-bar bg-warning text-dark" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">10 / 21 Hours</div>
            </div>
            <label class="pt-2">Monthly / 84 Hrs</label>
            <div class="progress" style="height: 30px;">
                <div class="progress-bar bg-success text-dark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20 / 84 Hours</div>
            </div>
        </div>
    </div>-->
</div>
@endsection
