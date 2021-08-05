@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pb-2 pt-2">
        <div class="col-lg-12" >
            <div class="d-flex justify-content-between pb-2 pt-1">
                <h4>Admin Home</h4>
            </div>
        </div>
    </div>

    <div class="card-deck">
        <a href="/admin/students">
            <div class="card m-3 text-dark" style="width: 18rem;">
                <img class="card-img-top mx-auto pt-3" style="height:50%; width:50%; object-fit: cover" src="/storage/images/reading.png" alt="Card image cap">
                <div class="card-body link-dark">
                    <p class="card-text h4">View Students</p>
                </div>
            </div>
        </a>

        <a href="/admin/teachers">
            <div class="card m-3 text-dark" style="width: 18rem;">
                <img class="card-img-top mx-auto pt-3" style="height:50%; width:50%;" src="/storage/images/teacher-at-the-blackboard.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text h4">View Teachers</p>
                </div>
            </div>
        </a>

        <a href="/admin/classes">
            <div class="card m-3 text-dark" style="width: 18rem;">
                <img class="card-img-top mx-auto pt-3" style="height:50%; width:50%;" src="/storage/images/document-files.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text h4">View Classes</p>
                </div>
            </div>
        </a>

    </div>
</div>
@endsection
