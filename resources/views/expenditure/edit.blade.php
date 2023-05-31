


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

  
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{ route('expenditure.update',$expenditure) }}" method="post">

       @csrf 
       @method('patch')
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="date" value="{{ $expenditure->date }}"  class="form-control">
       
       <input type="hidden" name="user_id" value="{{$expenditure->user_id }}" >

 



    <div class="form-group ">
 <label for="validationServer03" class="form-label">name of the person</label>
    <input type="text" name="name" value="{{ $expenditure->name }}"  class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the tell number.</div>
    </div>

    
    <div class="form-group ">
 <label for="validationServer03" class="form-label">amount givin</label>
    <input type="text" name="amount" value="{{ $expenditure->amount}}"  class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the address.</div>
    </div>



    <div class="form-group ">
 <label for="validationServer03" class="form-label">usage of the money</label>

    <textarea name="why"  cols="15" rows="4" class="form-control" aria-describedby="inputGroupPrepend" required>{{ $expenditure->why }}</textarea>
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