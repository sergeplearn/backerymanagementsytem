


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

      <form action="/houserent/serge" method="post">

           

            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
            <input type="text" name="date" value="<?php echo date("Y/m/d") ?>">

            <div class="form-outline mb-4">
    <input type="text" name="fname" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">first name</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" name="sname" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">last name</label>
  </div>


  <div class="form-outline mb-4">
    <input type="email" name="email" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Email</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="tell" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">tellephone number</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="no_childer" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">number of children</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="house_no" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">house number</label>
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
  <div class="card-header">house workers</div>
  <div class="card-body">
    

  <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 + New Tenant
</button>

<h3>list of tenant</h3>
<table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>Name</th>
      <th>House Rented</th>
      <th>monthly Rate</th>
      <th>Outstanding Balance</th>
      <th>Last payment</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>

</div></div>

  
</div>
<div class="col-md-1"></div>
</div>

 


@stop