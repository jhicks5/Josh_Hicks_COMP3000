@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-2 pt-2">
        <div class="col-lg-12" >
            <div class="d-flex justify-content-between pb-2">
                <h4>Admin Home</h4>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <a href="/admin/users">
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top img-thumbnail" src="/storage/images/reading.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text h4">View Students</p>
                </div>
            </div>
        </a>

        <a href="/admin/users">
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="/storage/images/teacher-at-the-blackboard.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text h4">View Teachers</p>
                </div>
            </div>
        </a>

        <a href="/school/1">
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="/storage/images/document-files.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text h4">View Classes</p>
                </div>
            </div>
        </a>

    </div>
</div>
@endsection
