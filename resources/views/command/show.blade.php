


@extends('layouts.app')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Command</h5>
        
      </div>
      <div class="modal-body">

      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('command.store')}}" method="post">
     
@csrf 
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
<input type="hidden" name="emply_id" value="{{ $employ_id }}" class="form-control">

<input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">






<div class="row ">

<div class="col-md-6">
<table class="table">
<tr>
 <th>Bread 50</th>
 <td><input type="text" name="bread50" value="{{ old('bread50') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>

</tr>
<tr>
 <th>log 40</th>
 <td><input type="text" name="long40" value="{{ old('long40') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>

</tr>
<tr>
 <th>square 40</th>
 <td><input type="text" name="square40" value="{{ old('square40') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>long 80</th>
 <td><input type="text" name="long80" value="{{ old('long80') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>round</th>
 <td><input type="text" name="round" value="{{ old('round') }}" class="form-control"aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>kirico </th>
 <td><input type="text" name="kirico" value="{{ old('kirico') }}" class="form-control"aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>

</table>
</div>





<div class="col-md-6">
 <table class="table">

<tr>
 <th>square 80</th>
 <td><input type="text" name="square80" value="{{ old('square80') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>bread 200</th>
 <td><input type="text" name="bread200" value="{{ old('bread200') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>

<tr>
 <th>bread 300</th>
 <td><input type="text" name="bread300" value="{{ old('bread300') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>bread 500</th>
 <td><input type="text" name="bread500" value="{{ old('bread500') }}" class="form-control" aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>
<tr>
 <th>bread 1000</th>
 <td><input type="text" name="bread1000" value="{{ old('bread1000') }}" class="form-control"aria-describedby="inputGroupPrepend" required>
 <div class="invalid-feedback">Please choose a username.</div>
</td>
</tr>

</table>

<div class="form-group">
<p></p>
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Submit  <i class="far fa-paper-plane fa-lg"></i></button>
</div>

</div>
</div>

</form>


         
      </div>
     
    </div>
  </div>
</div>















<?php $count = 1;
$totalpayedin = 0;
$bread50 = 50;
$bread100 = 100;
$bread200 = 200;
$bread300 = 300;
$bread500 = 500;
$bread1000 = 1000;
$sum = 0;

?>
  @include('alert.alert') 
  <div class="m-4 ms-2 w-70">
  <button type="button" class="btn mb-3 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 + New command
</button>
  
    
    <div class="card text-center mb-4">
  <div class="card-header">commands taken Out </div>
  <div class="card-body">
    
  
            <table id="example" class="table text-center align-middle table-sm mb-0 bg-white ">
                <thead>
                <tr>
                    <th class="text-center">NO</th>
                <th class="text-center">b50</th>
                <th class="text-center">lng40</th>
                <th class="text-center">sqr40</th>
                <th class="text-center">lg80</th>
                <th class="text-center">rnd </th>
                <th class="text-center">kico</th>
                <th class="text-center">sqr80</th>
                <th class="text-center">b200</th>
                <th class="text-center">b300</th>
                <th class="text-center">b500</th>
                <th class="text-center">b1000</th>
                <th class="text-center">total m</th>
                <th class="text-center">@can('isAdmin') Edit @endcan</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($command as $bread)
                <tr>
                <td> <p class="fw-normal mb-1 ">{{ $count++ }}</p></td>
                <td> <p class="fw-normal mb-1 ">{{ $bread->bread50 }}</p></td>
                    <td> <p class="fw-normal mb-1">{{ $bread->long40 }}</p></td>
                    <td> <p class="fw-normal mb-1">{{ $bread->square40 }}</p></td>
                    <td> <p class="fw-normal mb-1">{{ $bread->long80 }}</p></td>

                    <td> <p class="fw-normal mb-1">{{ $bread->round }}</p></td>
                    <td> <p class="fw-normal mb-1">{{ $bread->kirico }}</p></td>
                    <td><p class="fw-normal mb-1">{{ $bread->square80 }}</p></td>
                    <td><p class="fw-normal mb-1">{{ $bread->bread200 }}</p></td>
                    <td><p class="fw-normal mb-1">{{ $bread->bread300 }}</p></td>
                    <td><p class="fw-normal mb-1">{{ $bread->bread500 }}</p></td>
                    <td><p class="fw-normal mb-1">{{ $bread->bread1000 }}</p></td>
                   
                    <?php  
                 $amount;   

                ?>
                    <td> <p class="fw-normal mb-1">{{ number_format( $amount = (($bread->bread50 + $bread->long40 + $bread->square40) * $bread50) + (($bread->long80 + $bread->round + $bread->kirico + $bread->square80) * $bread100) + ($bread->bread200 * $bread200) + ($bread->bread300 * $bread300) + ($bread->bread500 * $bread500) + ($bread->bread1000 * $bread1000),2) }} </p></td>
                
                    <td>@can('isAdmin')<a class="btn btn-info"data-mdb-ripple-color="dark"  href=" {{route('command.edit',$bread->command) }}"><i class="fas fa-pen-to-square fa-lg"></i></a>@endcan</td>
                </tr>
              
                
               
      
                   
            
      
                   
<p class="d-lg-none">{{ $amount = (($bread->bread50 + $bread->long40 + $bread->square40) * $bread50) + (($bread->long80 + $bread->round + $bread->kirico + $bread->square80) * $bread100) + ($bread->bread200 * $bread200) + ($bread->bread300 * $bread300) + ($bread->bread500 * $bread500) + ($bread->bread1000 * $bread1000) }}  </p>
<?php
$sum+= $amount;

?>


@endforeach
</tbody>
</table>
 
</div>
  
</div>
</div>





   



@stop