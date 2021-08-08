@extends('layouts.app')

@section('content')

<div class="container pt-lg-4">
    <div class="row">
        <div class="col-lg-8" >
            <div class="pb-2">
                <h4>View Task</h4>
            </div>
            <table class="table" style="font-size: 15px">
                <tbody>
                    <tr style="font-size: 20px">
                        <th>Title</th>
                        <td>{{ $task->title }}</td>
                    </tr>
                    <tr>
                        <th>Attachment</th>

                        @if ($task->taskFile == '')
                            <td>N/A</td>
                        @else
                        <td><a download="/storage/{{ $task->taskFile }}" href="/storage/{{ $task->taskFile }}">
                                <div>
                                    <span class="pr-2">Download Attachment</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                    </svg>
                                </div>
                            </a>
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>{{ $task->description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @include('wellbeing.wellbeing')
    </div>
</div>


@endsection
