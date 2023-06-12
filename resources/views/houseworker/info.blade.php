


@extends('layouts.app')
@section('css')

@section('content')



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <p>Are you sure u want to delete this item</p>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-secondary" data-mdb-dismiss="modal">Close</button>
        <form action="{{route('houseworker.destroy',$houseworker) }}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn  btn-danger ">yes</button>
        
          </form>

        
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="card-text from-prevent-multiple-submits" action="{{route('houseworker.update',$houseworker) }}" method="post">
   <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-5">

    @csrf
    @method('patch')
    <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
    <input type="hidden" name="date" value="{{ $houseworker->date }}" class="form-control">
<div class="form-group">


<label  class="form-label" for="">First Name</label>
<input type="text" name="fname" value="{{ $houseworker->fname }}" class="form-control">

<p></p>
</div>

<div class="form-group">
<label  class="form-label" for="">Address</label>
<input type="text"  name="address" value="{{ $houseworker->address }}" class="form-control">

<p></p>
</div>


<div class="form-group">
<label  class="form-label" for="">Phone Number</label>

<input type="text"  name="tell" value="{{ $houseworker->tell }}" class="form-control">

<p></p>
</div>


    </div>
    <div class="col-md-5">

    <div class="form-group">
<label  class="form-label" for="">Second Name</label>
<input type="text"  name="sname" value="{{ $houseworker->sname }}" class="form-control">

<p></p>
</div>

   

<div class="form-group">
<label  class="form-label" for="">salary</label>
<input type="text"  name="salary" value="{{ $houseworker->salary }}" class="form-control">

<p></p>
</div>






<div class="form-group">
<label  class="form-label" for=""></label>
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Save changes  <i class="far fa-paper-plane fa-lg"></i></button>
   
</div>  


    </div>
    <div class="col-md-1"></div>
   </div>
   </form>
      

      </div>
     
    </div>
  </div>
</div>


@include('alert.alert')

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-3">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ $houseworker->fname }} {{ $houseworker->sname}}</h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-primary">Delete</button>
              <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal2" class="btn btn-outline-primary ms-1">Update</button>
            </div>
          </div>
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
                <p class="text-muted mb-0">{{ $houseworker->fname }} {{ $houseworker->sname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Salary</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $houseworker->salary }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $houseworker->tell }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $houseworker->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Created</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $houseworker->created_at }}</p>
              </div>
             
              @unless ($houseworker->created_at->eq($houseworker->updated_at))

                                    <small class="text-sm text-gray-600 text-center"> &middot; {{ __('edited') }}</small>
                                @endunless

            </div>
          </div>
        </div>
       
      </div>
    </div>
 








@stop