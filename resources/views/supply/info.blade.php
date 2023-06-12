


@extends('layouts.app')
@section('content')




<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete house worker</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>are u sure u want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <form action="{{route('supply.destroy',$supply) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
          <button class="btn  btn-danger">yes</button>
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
        <h5 class="modal-title" id="exampleModalLabel">update house workers info</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('supply.update',$supply) }}" method="post">
   
   @csrf 
   @method('patch')
   <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
   <input type="hidden" name="date" value="{{ $supply->date }}" class="form-control">
   
   <input type="hidden" name="user_id" value="{{$supply->user_id }}" class="form-control">
 



<div class="form-group ">
<label for="validationServer03" class="form-label">Full Name</label>
   <input type="text" name="name" value="{{ $supply->name }}" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the full name.</div>
   </div>


   <div class="form-group ">
<label for="validationServer03" class="form-label">tell</label>
   <input type="text" name="tell" value="{{ $supply->tell }}" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the tell number.</div>
   </div>

   

   <div class="form-group ">
<label for="validationServer03" class="form-label">address</label>
   <input type="text" name="address" value="{{ $supply->address }}" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the address.</div>
   </div>


   <div class="form-group ">
<label for="validationServer03" class="form-label">NIC_no</label>
   <input type="text" name="NIC_no" value="{{ $supply->NIC_no }}" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter iD card number.</div>
   </div>

   </div>
  


   <div class="form-group ">
     <p></p>
   <label for="validationServer03" class="form-label"></label>
<button type="submit" class="btn btn-primary btn-block  btn-rounded button-prevent-multiple-submits">Submit  <i class="far fa-paper-plane fa-lg"></i></button>
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
            <h5 class="my-3">{{ $supply->name }} </h5>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal2" class="btn btn-primary">Delete</button>
              @can('isAdmin')
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
                <p class="text-muted mb-0">{{  $supply->name }} </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NIC NO</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{  $supply->NIC_no }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{  $supply->tell }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{  $supply->address }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Created</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $supply->created_at }}</p>
              </div>
             
              @unless ($supply->created_at->eq($supply->updated_at))

                                    <small class="text-sm text-gray-600 text-center"> &middot; {{ __('edited') }}</small>
                                @endunless

            </div>
          </div>
        </div>
       
      </div>
    </div>
 


@stop