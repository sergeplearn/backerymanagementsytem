


@extends('layouts.app')
@section('content')

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('supply.store')}}" method="post">
   
   @csrf 
   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
   <input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">
   <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">


   


<div class="form-group ">
<label for="validationServer03" class="form-label">Full Name</label>
   <input type="text" name="name" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the full name.</div>
   </div>


   <div class="form-group ">
<label for="validationServer03" class="form-label">tell</label>
   <input type="text" name="tell" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the tell number.</div>
   </div>

   


   <div class="form-group ">
<label for="validationServer03" class="form-label">address</label>
   <input type="text" name="address" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter the address.</div>
   </div>


   <div class="form-group ">
<label for="validationServer03" class="form-label">NIC_no</label>
   <input type="text" name="NIC_no" class="form-control" aria-describedby="inputGroupPrepend" required>
    <div class="invalid-feedback">enter iD card number.</div>
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



<div class="m-4  w-70 pt-6">
<button type="button" class="btn mb-1 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
 + New suplies
</button>


<table id="example" class="table align-middle mb-0 bg-white text-center">
  <thead class="bg-light">
    <tr>
      <th class="text-center">Name</th>
      <th class="text-center">info</th>
  
      <th class="text-center">List items</th>
      <th class="text-center">pay supplies</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($supply as $supply)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{ $supply->name }}</p>
            <p class="text-muted mb-0">tell: {{ $supply->tell }}</p>
          </div>
        </div>
      </td>
      <td>
      <a href="{{route('supply.edit',$supply->id)}}" class="btn btn-info "data-mdb-ripple-color="dark"><i class="fas fa-circle-info fa-lg"></i></a>
      
      </td>
      
      <td>
      <a href="{{route('itemsupplied.show',$supply->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>

      </td>
      

      <td>

    <a href="{{route('paysupplie.show',$supply->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>
</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@stop