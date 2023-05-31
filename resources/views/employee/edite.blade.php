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




<div class="row m-5">
   
  <div class="col-md-2"></div>
  <div class="col-md-8">

  
  @include('alert.alert')
  
<div class="card text-center">
  <div class="card-header">Special title treatment</div>
  <div class="card-body">

   <table class="table">
    <tr>
      <th>Full Name</th>
      <td>{{ $employee->fname }} {{ $employee->sname }}</td>
    </tr>

    <tr>
      <th>NIC_number</th>
      <td>{{ $employee->workerID }}</td>
    </tr>

    <tr>
      <th>Address</th>
      <td>{{ $employee->address }}</td>
    </tr>

    <tr>
      <th>Code number</th>
      <td>{{ $employee->code }}</td>
    </tr>

    <tr>
      <th>Phone number</th>
      <td>{{ $employee->tell }}</td>
    </tr>


    <tr>
      <th>Payment %</th>
      <td>{{ $employee->pecentage }}</td>
    </tr>


    <tr>
      <th><!-- Button trigger modal -->
<button type="button" class="btn btn-primary w-100" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
<i class="fas fa-pen-to-square fa-lg"></i>
</button>
</th>
      <td><!-- Button trigger modal -->
<button type="button" class="btn btn-danger w-100" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
<i class="fas fa-trash fa-lg" ></i>
</button>
</td>
    </tr>
   </table>
   

   @unless ($employee->created_at->eq($employee->updated_at))
  <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
   @endunless


  </div>
 
</div>


</div>
  <div class="col-md-2"></div>
</div>




@stop