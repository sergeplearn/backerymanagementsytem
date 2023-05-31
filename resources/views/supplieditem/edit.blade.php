


@extends('layouts.app')
@section('content')




<div class="row m-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">



    <div class="card text-center">
  <div class="card-header"> edit supplyers infor</div>
  <div class="card-body">


    
    

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">

 
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('itemsupplied.update',$itemsupplied) }}" method="post">

       @csrf 
       @method('patch')
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="user_id" value="{{$itemsupplied->user_id }}" >
       <input type="hidden" name="ref_supply" class="form-control" aria-describedby="inputGroupPrepend" value="{{ $itemsupplied->ref_supply }}">
       <input type="hidden" name="date" value="{{$itemsupplied->date }}" class="form-control">
       <input type="hidden" name="id" class="form-control" aria-describedby="inputGroupPrepend" value="{{ $itemsupplied->id }}">


 



    <div class="form-group ">
 <label for="validationServer03" class="form-label">number of item</label>
    <input type="text" name="item" value="{{ $itemsupplied->item }}" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the tell number.</div>
    </div>

    

    <div class="form-group ">
 <label for="validationServer03" class="form-label">number of item</label>
    <input type="text" name="number" value="{{ $itemsupplied->number }}" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the number of items.</div>
    </div>




    <div class="form-group ">
 <label for="validationServer03" class="form-label">price per item</label>
    <input type="text" name="itemprice" value="{{ $itemsupplied->itemprice }}" class="form-control" aria-describedby="inputGroupPrepend" required>
     <div class="invalid-feedback">enter the price per item.</div>
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