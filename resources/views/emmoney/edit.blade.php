


@extends('layouts.app')
@section('content')

<h3>test result<span><hr></span></h3>


<div class="row m-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">





    <div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
    <h5 class="card-title">Edit workers money</h5>

    
    

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

  {{$money->amount}}
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('money.update',$money->id)}}" method="post">

       @csrf 

@method('patch')

       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="id" value="{{ $money->id }}" >
       <input type="hidden" name="user_id" value="{{ $money->user_id }}" >
 <div class="form-group ">
 <label for="validationServer03" class="form-label">enter the amount</label>
    <input type="text" name="amount" class="form-control" aria-describedby="inputGroupPrepend" value="{{$money->amount}}" required>
     <div class="invalid-feedback">please enter and amount.</div>
    </div>

    <input type="hidden" name="emply_id" value="{{$money->emply_id}}" class="form-control" aria-describedby="inputGroupPrepend"  required>
     
    <input type="hidden" name="date" value="{{$money->date}}" class="form-control" aria-describedby="inputGroupPrepend" required>

    <div class="form-group m-5">
      
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Submit  <i class="far fa-paper-plane fa-lg"></i></button>
</div>


</form>


</div>
</div>

   


 
       
</div>
  <div class="card-footer text-muted"></div>
</div>




</div>
<div class="col-md-2"></div>
</div>



@stop