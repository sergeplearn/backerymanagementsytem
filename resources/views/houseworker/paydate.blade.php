


@extends('layouts.app')
@section('content')

<h3>test result<span><hr></span></h3>




<div class="row mt-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">



        <div class="card text-center">
  <div class="card-header">house worker pay date</div>
  <div class="card-body">


    
    

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

  
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('houseworkers.salary')}}" method="get">

       @csrf 
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
<input type="hidden" name='house_id' value='{{ $houseworkers->id }}'>


 <div class="form-group ">
 <label for="validationServer03" class="form-label">start month</label>
    <input type="date" name="start" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the full name.</div>
    </div>


    <div class="form-group ">
 <label for="validationServer03" class="form-label">end month</label>
    <input type="date" name="stop" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the tell number.</div>
    </div>


    
    


   


    <div class="form-group ">
      
<button type="submit" class="btn btn-primary btn-block mt-5 btn-rounded button-prevent-multiple-submits">Submit</button>
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