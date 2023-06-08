


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

      
    

      <form class="card-text from-prevent-multiple-submits g-3 formss needs-validation" id="forms" novalidate action="{{route('houseworker.store')}}" method="post">
      
      
     

    @csrf 
    
     
    
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
    <input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">
<div class="form-group">


<label  class="form-label" for="">First Name</label>
<input type="text" name="fname" class="form-control" aria-describedby="inputGroupPrepend" required>

<div class="invalid-feedback">
<strong></strong> Please enter ur first name.
      </div>
</div>


<div class="form-group">
<label  class="form-label" for="">Second Name</label>
<input type="text"  name="sname" class="form-control" aria-describedby="inputGroupPrepend" required>

<div class="invalid-feedback">
        please enter the second name.
      </div>
</div>


<div class="form-group">
<label  class="form-label" for="">Address</label>
<input type="text"  name="address" class="form-control" aria-describedby="inputGroupPrepend" required>

<div class="invalid-feedback">
        Please enter the address.
      </div>
</div>


<div class="form-group">
<label  class="form-label" for="">Phone Number</label>
<input type="text"  name="tell" class="form-control" aria-describedby="inputGroupPrepend" required>

<div class="invalid-feedback">
        Please enter the phone number.
      </div>
</div>

   

<div class="form-group">
<label  class="form-label" for="">salary</label>
<input type="text"  name="salary" class="form-control" aria-describedby="inputGroupPrepend" required>

<div class="invalid-feedback">
        Please enter the salary.
      </div>
</div>






<div class="form-group">
<label  class="form-label" for=""></label>
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Save changes  <i class="far fa-paper-plane fa-lg"></i></button>
   
</div>  


    
   </form>




         
      </div>
     
    </div>
  </div>
</div>
















      





    <div class="m-4">
    <button type="button" class="btn mb-2 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
 + New House Worker
</button>

@include('alert.alert')

    <table id="example" class="table align-middle  bg-white table-sm">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>infor</th>
      <th>advance salary</th>
     
      <th>increment salary</th>
      
      <th>Salary</th>
      <th>record sal</th>
      
    </tr>
  </thead>
 
     
     

  <tbody>
  @foreach($houseworkers as $houseworker)
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
            <p class="fw-bold mb-1">{{ $houseworker->fname }}  {{ $houseworker->sname }}</p>
            <p class="text-muted mb-0">tell: {{ $houseworker->tell }}</p>
          </div>
        </div>
      </td>
      <td>
      <a href="{{route('houseworker.edit',$houseworker)}}" class="btn btn-outline-primary  "data-mdb-ripple-color="dark"><i class="fas fa-circle-info fa-lg"></i></a>
     
      </td>
      
      <td>
      <a href="{{route('advance.show',$houseworker->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded "data-mdb-ripple-color="dark">Active</a>
     
      </td>
     
      <td>
      <a href="{{route('houseincrement.show',$houseworker->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>

      </td>
      
      <td>
      <a href="{{route('houseworker.paydate',$houseworker->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded "data-mdb-ripple-color="dark">Active</a>
     
      </td>
      

      <td>
      <a href="{{route('reghousesalary.show',$houseworker)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded "data-mdb-ripple-color="dark">Active</a>
     
      </td>
      
     
    </tr>
    @endforeach
    
  </tbody>
 

     
</table>


<a class="btn mb-3 btn-primary" href="/priceofbread/1/edit">pricechange</a>


</div>





  
@stop