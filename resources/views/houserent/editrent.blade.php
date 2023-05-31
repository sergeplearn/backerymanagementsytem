


@extends('layouts.app')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #eee;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="/houserent/update/{{ $rent->id }}" method="post">

           

            @csrf
            @method('PATCH')
            <input type="hidden" name="user_id" value="{{ $rent->user_id }}" >
            <input type="hidden" name="date" value="{{ $rent->date }}">

            <div class="form-outline mb-4">
    <input type="text" name="fname" value="{{ $rent->fname }}" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">first name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" name="sname" value="{{ $rent->sname }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">last name</label>
  </div>


  <div class="form-outline mb-4">
    <input type="email" name="email" value="{{ $rent->email }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Email</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="tell" value="{{ $rent->tell }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">tellephone number</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="no_childer" value="{{ $rent->no_childer }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">number of children</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="house_no" value="{{ $rent->house_no }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">house number</label>
  </div>

 



  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>



            </form>

      </div>
     
    </div>
  </div>
</div>









<div class="row m-5">
  <div class="col-md-1"></div>
  <div class="col-md-10">

  

 





<section style="background-color: #eee;">
  <div class="container py-4">
    

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-1">{{ $rent->fname }} {{ $rent->sname }}</h5>
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
                <p class="text-muted mb-0">{{ $rent->fname }} {{ $rent->sname }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $rent->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $rent->tell }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(237) {{ $rent->tell }}</p>
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