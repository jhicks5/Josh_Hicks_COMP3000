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

    <img src="public/images/teacher-at-the-blackboard.png" alt="fsdkjfh">

    <div class="card-deck">
        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="images/reading.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text h4">View Students</p>
            </div>
        </div>

        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="images/teacher-at-the-blackboard.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text h4">View Teachers</p>
            </div>
        </div>

        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="images/document-files.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text h4">View Classes</p>
            </div>
        </div>
    </div>



<!--        <div class="card m-5" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>-->
</div>
@endsection
