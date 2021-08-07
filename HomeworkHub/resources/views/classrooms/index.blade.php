@extends('layouts.app')

@section('content')
<div class="container pt-lg-4">
    <div class="row">
        <div class="col-lg-8" >
            <div class="d-flex justify-content-between pb-4">
                <h4>Homework Tasks for {{ $classroom->classname }}</h4>
                @if(auth()->User()->role == 2 && $classroom->id == auth()->User()->classroom_id)
                <a class="btn btn-primary mr-lg-5 float-left" href="{{ url('/task/create') }}">Add New Task</a>
                @endif
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
                @foreach($classroom->task as $task)
                    <a href="/task/{{ $task->id }}" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1 col-6">{{ $task->title }}</h5>
                            <small class="text-muted col-2">Uploaded: {{ $task->created_at->toDateString() }}</small>
                            <svg class="bi bi-chevron-right col-1" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"/></svg>
                        </div>
                        <p class="mb-1 col-6" style="width: 30ch; text-overflow: ellipsis; white-space: nowrap; overflow: hidden">{{ $task->description }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        @include('wellbeing.wellbeing')
    </div>
</div>
@endsection
