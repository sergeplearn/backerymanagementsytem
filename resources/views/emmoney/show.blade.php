


@extends('layouts.app')
@section('content')


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{ route('money.store') }}" method="post">

@csrf 
<input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
<input type="hidden" name="emply_id" value="{{ $workerid }}" class="form-control">
<input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">



<div class="form-group ">
<label for="validationServer03" class="form-label">enter the amount</label>
<input type="text" name="amount" class="form-control" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">please enter and amount.</div>
</div>



<div class="form-group m-5">

<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Submit   <i class="far fa-paper-plane fa-lg"></i></button>
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

 

@include('alert.alert')
<div class="m-4 w-70">
  
 
  <button type="button" class="btn mb-2 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
 + Give money
</button>


<div class="card ">
  <div class="card-header text-center">daily payment of money to bakery</div>
  <div class="card-body">
  
   
   
    <table id="example" class="table table-sm card-text">
  <thead>
    <tr>
      <th class="text-center" >#</th>
      <th class="text-center">Date Of Payment</th>
      <th class="text-center">Amount</th>
      <th class="text-center">@can('isAdmin') Edit @endcan</th>
      <th class="text-center"> @can('isAdmin') Delete @endcan</th>

    </tr>
  </thead>
  <tbody class="text-center">
  @foreach($money as $money)
  <tr>
      <td><p>{{ $count++ }}</p></td>
      <td><p>{{ $money->created_at }}</p></td>
      <td><p>{{$amount = $money->amount}} <i class="fas fa-money-bill-1-wave"></i></p></td>
      
      <td>@can('isAdmin')
      <a class="btn btn-info "data-mdb-ripple-color="dark" href="{{route('money.edit',$money->id) }}"><i class="fas fa-pen-to-square fa-lg"></i></a>@endcan</td>
       
      <td> @can('isAdmin') 
      <form action="{{route('money.destroy',$money->id) }}" method="post">
     @csrf
     @method('DELETE')
      <button class="btn btn-danger"data-mdb-ripple-color="dark"><i class="fas fa-trash fa-lg" ></i></button>
      </form>  
    @endcan
    </td>
    </tr>
    <?php
      $tatal_amount+= $amount
      ?>

@endforeach


  </tbody>
</table>

<p class="card-text text-center"><b>Total Amount:</b>   <?php
    echo $tatal_amount
      ?></p>
   

  </div>
  
</div>




</div>


@stop