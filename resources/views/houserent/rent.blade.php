


@extends('layouts.app')
@section('content')













<div class="row m-5">
  <div class="col-md-1"></div>
  <div class="col-md-10">

  

  
@foreach($house as $house)
<p>{{$name = $house->sname }}</p>

@endforeach


@foreach($rent as $rent)
<p>{{ $rent->price }}</p>


@endforeach


<section style="background-color: #eee;">
  <div class="container py-4">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-1"> name </h5>
            <p class="text-muted mb-1">Full Stack Developer</p>
           
            <div class="d-flex justify-content-center mb-2">
            <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
 + Edite
</button>
              <button type="button" class="btn btn-outline-primary ms-1">delete</button>
            </div>
          </div>
        </div>



        <div class="card mb-4 mb-lg-0">
          
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">    name </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> email  </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> phone  </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(237) name </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Area</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
        

          
        </div>
      </div>
    </div>
  </div>
</section>



 
</div>
<div class="col-md-1"></div>
</div>

 


@stop