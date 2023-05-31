


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
<div class="col-md-2"></div>
<div class="col-md-8">

<div class="card text-center">
  <div class="card-header">House Worker Info</div>
  <div class="card-body">
   
   
    <table class="table align-middle table-sm mb-0 bg-white table-borderless ">
  
  <tr>
      <th> <b>Full Name :</b> </th>
      <td>{{ $supply->name }} </td>
  </tr>
  <tr>
      <th> <b>Phone number :</b> </th>
      <td>{{ $supply->tell }}</td>
  </tr>
  <tr>
      <th> <b> addresss :</b> </th>
      <td>{{ $supply->address }}</td>
  </tr>
  <tr>
      <th> <b> NIC_number :</b> </th>
      <td>{{ $supply->NIC_no }}</td>
  </tr>
  <tr>
      <th> @can('isAdmin')<b> Delete :</b>@endcan </th>
      <td>

      <button type="button" class="btn btn-danger w-100 p-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
<i class="fas fa-trash fa-lg" ></i>
</button>
      @can('isdeveloper')
      <!-- Button trigger modal -->

        
        @endcan
      </td>
  </tr>
</table>
   
   <p></p>
   @can('isAdmin')

   <button type="button" class="btn btn-info w-100 p-2" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
   <i class="fas fa-pen-to-square fa-lg"></i>
</button>




    
  @endcan
  </div>
  <div class="card-footer text-muted">{{ $supply->created_at }}</div>
</div>


</div>
<div class="col-md-2"></div>

</div>




@stop