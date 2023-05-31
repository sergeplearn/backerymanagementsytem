


@extends('layouts.app')
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


<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
@include('alert.alert')

<div class="card text-center">
  
  <div class="card-header">House Worker Info</div>
  <div class="card-body">
   
   
    <table class="table align-middle table-sm mb-0 bg-white table-borderless ">
  
  <tr>
      <th> <b>Full Name :</b> </th>
      <td>{{ $houseworker->fname }} {{ $houseworker->sname}}</td>
  </tr>
  <tr>
      <th> <b>Phone number :</b> </th>
      <td>{{ $houseworker->tell }}</td>
  </tr>
  <tr>
      <th> <b> salary :</b> </th>
      <td>{{ $houseworker->salary }} <i class="fas fa-money-bill-1-wave"></i></td>
  </tr>
  <tr>
      <th> <b> Address :</b> </th>
      <td>{{ $houseworker->address }}</td>
  </tr>
 
  <tr>
      <th> <b> Delete :</b> </th>
      <td>
      <button type="button" class="btn btn-danger w-100 p-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
    Delete
</button>

        
      </td>
  </tr>
  
</table>
   
   <p></p>
   <button type="button" class="btn btn-info w-100 p-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal2"><i class="fas fa-pen-to-square fa-lg"></i></button>
    
  </div>
  @unless ($houseworker->created_at->eq($houseworker->updated_at))

                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless

  <div class="card-footer text-muted">{{ $houseworker->created_at }}</div>
</div>




</div>
<div class="col-md-2"></div>

</div>




@stop