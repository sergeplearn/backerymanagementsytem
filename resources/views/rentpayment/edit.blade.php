


@extends('layouts.app')
@section('content')

<?php
$date = date("Y/m/d");
?>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ route('rentpayment.update', $rentpayment) }}" method="post">

           

            @csrf
            @method('patch')
            <input type="text" name="date" value="{{$rentpayment->date}}">
            <input type="text" name="rent_id" value="{{$rentpayment->id}}">

         
  <div class="form-outline mb-4">
    <input type="text" name="amount" value="{{$rentpayment->amount}}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">enter amount</label>
  </div>

  
  

 



  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>



            </form>

      </div>
     
    </div>
  </div>
</div>







<div class="row m-5">
  <div class="col-md-1"></div>
  <div class="col-md-10">

  <div class="card text-center">
  <div class="card-header">payment of house rent</div>
  <div class="card-body">




  

  <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 + New Tenant
</button>








</div></div>

  
</div>
<div class="col-md-1"></div>
</div>

 


@stop