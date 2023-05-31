


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

      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('expenditure.store')}}" method="post">

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
</div>




@include('alert.alert')
<?php
$count = 1;
$tatal_amount = 0;
?>


<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">

 
  <button type="button" class="btn mb-3 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
 + New expenditer
</button>


<div class="card ">
  <div class="card-header text-center">daily payment of money to bakery</div>
  <div class="card-body">
  
   
   
    <table id="example" class="table table-sm card-text">
  <thead>
    <tr>
      <th class="text-center" >#</th>
      <th class="text-center">name</th>
      <th class="text-center">amount</th>
      <th class="text-center">why</th>
      <th class="text-center">date</th>
      <th class="text-center"> @can('isAdmin') Edit @endcan</th>

    </tr>
  </thead>
  <tbody class="text-center">
  @foreach($expen as $expen)
  <tr>
      <td><p>{{ $count++ }}</p></td>
      <td><p>{{ $expen->name}}</p></td>
      <td><p>{{ $expen->amount}} <i class="fas fa-money-bill-1-wave"></i></p></td>
      <td><p>{{$expen->why}}</p></td>
      <td><p>{{ $expen->created_at }}</p></td>
      <td>@can('isAdmin')<a class="btn btn-info"data-mdb-ripple-color="dark" href="{{route('expenditure.edit',$expen->id) }}"><i class="fas fa-pen-to-square fa-lg"></i></a>@endcan</td>
       
      
</tr>
@endforeach

    
  </tbody>
</table>

<p class="card-text text-center"><b>Total Amount:</b>   <?php
    echo $tatal_amount
      ?></p>
   

  </div>
  
</div>



</div>
  <div class="col-md-1"></div>
</div>


@stop