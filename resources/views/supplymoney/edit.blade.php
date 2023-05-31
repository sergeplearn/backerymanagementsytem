


@extends('layouts.app')
@section('content')

<h3>test result<span><hr></span></h3>



<div class="row m-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">




    <div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
    <h5 class="card-title">pay supplies</h5>

    
    

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

  
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('paysupplie.update',$paysupplie)}}" method="post">

       @csrf 
       @method('patch')
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="user_id" value="{{ $paysupplie->user_id }}" class="form-control">
       <input type="hidden" name="id" value="{{ $paysupplie->id }}" class="form-control">
 <input type="hidden" name="ref_supply" value="{{ $paysupplie->ref_supply}}" class="form-control">
 <input type="hidden" name="date" value="{{$paysupplie->date}}" class="form-control">
 


 <div class="form-group ">
 <label for="validationServer03" class="form-label">enter the amount</label>
    <input type="text" name="amount"  value="{{$paysupplie->amount}}" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">please enter and amount.</div>
    </div>



    <div class="form-group ">
    <label for="validationServer03" class="form-label"></label> 
<button type="submit" class="btn btn-primary btn-block  btn-rounded button-prevent-multiple-submits">Submit  <i class="far fa-paper-plane fa-lg"></i></button>
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