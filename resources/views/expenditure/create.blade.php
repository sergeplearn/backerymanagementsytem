


@extends('layouts.app')
@section('content')




<div class="row m-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">



    <div class="card text-center">
  <div class="card-header"> expenditures </div>
  <div class="card-body">


    
    

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


    <form class="needs-validation from-prevent-multiple-submits" novalidate action="/expenditure/store" method="post">

       @csrf 
       <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">
       


 



    <div class="form-group ">
 <label for="validationServer03" class="form-label">name of the person</label>
    <input type="text" name="name"  class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the name of the person.</div>
    </div>

    
    <div class="form-group ">
 <label for="validationServer03" class="form-label">amount givin</label>
    <input type="text" name="amount" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the amount.</div>
    </div>



    <div class="form-group ">
 <label for="validationServer03" class="form-label">usage of the money</label>

    <textarea name="why" id="" cols="15" rows="4" class="form-control" aria-describedby="inputGroupPrepend" required></textarea>
     <div class="invalid-feedback">why do u need the money.</div>
    </div>




    

    


   


    <div class="form-group ">
      
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