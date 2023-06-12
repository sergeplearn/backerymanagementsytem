@extends('layouts.app')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete and employee</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>are u sure u want to delete this item</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <form action="{{ route('employee.destroy',$employee) }}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">yes</i></button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit employees info</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="card-text from-prevent-multiple-submits" action="{{ route('employee.update',$employee) }}" method="post">
   <div class="row">
    <div class="col-md-6">

   
   @csrf 
  @method('patch')
   <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
  
   <input type="hidden" name="date" value="{{ $employee->date }}" class="form-control">
   <input type="hidden" name="id" value="{{ $employee->id }}" class="form-control">
<div class="form-group">


<label  class="form-label" for="">First Name</label>
<input type="text" name="fname" value="{{ $employee->fname }}" class="form-control"  >


<p></p>
</div>

<div class="form-group">
<label  class="form-label" for="">Address</label>
<input type="text"  name="address" value="{{ $employee->address }}" class="form-control" >

<p></p>
</div>


<div class="form-group">
<label  class="form-label" for="">Phone Number</label>
<input type="text"  name="tell" value="{{ $employee->tell }}" class="form-control" >

<p></p>
</div>

<div class="form-group">
<label  class="form-label" for="">pecentage</label>
<input type="text"  name="pecentage" value="{{ $employee->pecentage }}" class="form-control">
<p></p>
</div>

</div>
<div class="col-md-6">

<div class="form-group">
<label  class="form-label" for="">Second Name</label>
<input type="text"  name="sname" value="{{ $employee->sname }}" class="form-control" >

<p></p>
</div>


<div class="form-group">
<label  class="form-label" for="">Worksers ID</label>
<input type="text"  name="workerID" value="{{ $employee->workerID }}" class="form-control"  >

<p></p>
</div>

<div class="form-group">
<label  class="form-label" for="">Referes code</label>
<input type="text"  name="code" value="{{ $employee->code }}" class="form-control" >

<p></p>

</div>




<div>
<label  class="form-label" for=""></label>
<button type="submit" class="btn btn-primary w-100 btn-block  btn-rounded button-prevent-multiple-submits">Save changes  <i class="far fa-paper-plane fa-lg"></i></button>
  
</div>  
  
  
</div>
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
            <h5 class="my-3">{{ $employee->fname }} {{ $employee->sname }}</h5>
            <div class="d-flex justify-content-center mb-2">
            @can('delete',$employee)   
              <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal2" class="btn btn-primary">Delete</button>
              @endcan
              @can('update',$employee)
              <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-outline-primary ms-1">Update</button>
            @endcan
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
                <p class="text-muted mb-0">{{ $employee->fname }} {{ $employee->sname }}</p>
              </div>
            </div>
           
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->tell }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Pecentage</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->pecentage }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Created</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $employee->created_at }}</p>
              </div>
             
              @unless ($employee->created_at->eq($employee->updated_at))

                                    <small class="text-sm text-gray-600 text-center"> &middot; {{ __('edited') }}</small>
                                @endunless

            </div>
          </div>
        </div>
       
      </div>
    </div>
 



@stop