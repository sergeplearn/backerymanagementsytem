


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

      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('paysupplie.store')}}" method="post">

@csrf 
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
<input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">
<input type="hidden" name="ref_supply" value="{{ $supply }}" class="form-control">



<div class="form-group ">
<label for="validationServer03" class="form-label">enter the amount</label>
<input type="text" name="amount" class="form-control" aria-describedby="inputGroupPrepend" required>
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
</div>




<?php
$count = 1;
$tatal_amount = 0;
?>

@include('alert.alert')

<div class="m-4 w-70">


<button type="button" class="btn mb-4 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
 + paysupplies
</button>

<div class="card text-center">
  <div class="card-header"> edit payment supplies </div>
  <div class="card-body">
    
   
   
    <table id="example" class="table table-sm card-text">
  <thead>
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">Date Of Payment</th>
      <th class="text-center">Amount</th>
      <th class="text-center">@can('isAdmin')  Edit  @endcan</th>

    </tr>
  </thead>
  <tbody>
  @foreach($paysupply as $money)
  {{ $money->name }}
  
  <tr>
      <th scope="row">{{ $count++ }}</th>
      <td>{{ $money->created_at }}</td>
      <td>{{$amount = $money->amount}}  <i class="fas fa-money-bill-1-wave"></i></td>
      <td>
      @can('isAdmin')  
      <a class="btn btn-outline-info btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark" href="{{route('paysupplie.edit',$money->id) }}"><i class="fas fa-pen-to-square fa-lg"></i></a>
    @endcan
    </td>
    
      <?php
    
      $tatal_amount+= $amount
      ?>
    </tr>
   

@endforeach

    
  </tbody>
</table>

<p class="card-text"><b>Total Amount:</b>   <?php
    echo $tatal_amount
      ?></p>
   

  </div>
  <div class="card-footer text-muted">2 days ago</div>
</div>

</div>




@stop