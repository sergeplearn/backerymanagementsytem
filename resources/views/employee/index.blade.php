


@extends('layouts.app')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form  novalidate class="card-text from-prevent-multiple-submits g-3 needs-validation" action="{{ route('employee.store') }}" method="post">
   
   
    @csrf 
   
    <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
    <input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">

   

<div class="form-group">


<label  class="form-label" for="">First Name</label>
<input type="text" name="fname" class="form-control"  value="{{ old('fname') }}" aria-describedby="inputGroupPrepend"required>
<div class="invalid-feedback">Please enter first name.</div>
</div>

<div class="form-group">
<label  class="form-label" for="">Second Name</label>
<input type="text"  name="sname" class="form-control" value="{{ old('sname') }}" aria-describedby="inputGroupPrepend"required>

<div class="invalid-feedback">Please enter second name.</div>
</div>

<div class="form-group">
<label  class="form-label" for="">Address</label>
<input type="text"  name="address" class="form-control" value="{{ old('address') }}" aria-describedby="inputGroupPrepend"required>

        <div class="invalid-feedback">Please enter the address.</div>
</div>


<div class="form-group">
<label  class="form-label" for="">Phone Number</label>
<input type="text"  name="tell" class="form-control" value="{{ old('tell') }}" aria-describedby="inputGroupPrepend"required>
<div class="invalid-feedback">Please enter ur phone number.</div>

</div>

<div class="form-group">
<label  class="form-label" for="">payment pecentage</label>
<input type="text"  name="pecentage" class="form-control" value="{{ old('pecentage') }}" aria-describedby="inputGroupPrepend"required>
<div class="invalid-feedback">Please enter payment pecentages.</div>
</div>







<div class="form-group">
<label  class="form-label" for="">Worksers ID</label>
<input type="text"  name="workerID" class="form-control" value="{{ old('workerID') }}"   aria-describedby="inputGroupPrepend"required>

<div class="invalid-feedback">Please enter worker ID.</div>
</div>

<div class="form-group">
<label  class="form-label" for="">Referes code</label>
<input type="text"  name="code" class="form-control"value="{{ old('code') }}" aria-describedby="inputGroupPrepend"required>

<div class="invalid-feedback">Please enter reference code.</div>

</div>

<div>
<label  class="form-label" for=""></label>
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Save changes  <i class="far fa-paper-plane fa-lg"></i></button>
   
</div>  
   





   
   
   
    
    </form>
         
      </div>
     
    </div>
  </div>
</div>






@include('alert.alert')






<div class="m-4 w-70">
@can('create',App\Models\employee::class)
<button type="button" class="btn mb-1 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 + New worker
</button>
@endcan
<table id="example" class="table align-middle  mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>infor</th>
      <th>command</th>
      <th>breadtaken</th>
      <th>payment</th>
      <th>salary</th>
      <th>record salery</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employee as $employee)
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
            <p class="fw-bold mb-1">{{ $employee->fname }}  {{ $employee->sname }}</p>
            <p class="text-muted mb-0">Code: <b>{{ $employee->code }}</b> </p>
          </div>
        </div>
      </td>
     

      <td>
        
       
    
 
           
   <a class="btn btn-outline-primary btn-sm d-inline btn-rounded " data-mdb-ripple-color="dark" href="{{route('employee.edit',$employee)}}">Edit</a></td> 
   

    
  
        </td>
        <td>
        

        <a href="{{ route('command.show',$employee)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>
  
        </td>
 

      <td>
      
     <form action="{{ route('bread.show',$employee) }}" method="get">
     
      <input type="hidden" name="employ_code" value="{{ $employee->code }}">
      <button class="btn btn-outline-primary btn-sm d-inline btn-rounded "data-mdb-ripple-color="dark" >Active</button>
     </form>
      </td>
      
      

      <td>
      
  

  
    <a class="btn btn-outline-primary btn-sm d-inline btn-rounded " data-mdb-ripple-color="dark" href="{{route('money.show',$employee)}}">Active</a>
    
  


    

      </td>

      <td>
        
      @can('isAdmin')
      <a href="{{ route('employee.paydate',$employee) }}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>
@endcan
     

      </td>

      <td>
        
      @can('isAdmin')
      <a href="{{route('regemploysal.show',$employee)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">Active</a>
@endcan
     

      </td>
     
  
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

  <div class="card">
  <div class="card-body">

  
  
  <form class="from-prevent-multiple-submits"></form>
<a href="{{route('report.sendmail')}}" class="btn button-prevent-multiple-submits btn-primary btn-rounded p-1 hover:bg-indigo-700 text-center w-100 ">SEND TODAYS REPORT  <i class="far fa-paper-plane fa-lg"></i> </a>


  </div>
</div>


 </div>
 

 
 <div class="col-md-4"></div>
</div>

<?php


$d=(strtotime("2024/10/06") - strtotime("2023/05/06"));
 $month = 60*60*24*7*4;
$total =ceil($d/$month);
echo $total;
?>

@stop

