

<!--<meta http-equiv="refresh" content="30;url=logout.php" />-->
@extends('layouts.app')
@section('content')



<?php
  function money($amount) {
   echo 'CFA ' . number_format($amount, 2);
};


?>

<?php
$tbread50 = 0;
$tlong40 = 0;
$tsquare40 = 0; 
$tlong80 = 0;
$tround = 0;
$tkirico = 0;
$tsquare80 = 0;
$tbread200 = 0;
$tbread300 = 0;
$tbread500 = 0;
$tbread1000 = 0;
$totalamount = 0;
$count = 1;
$amout = 0;
$totalamount = 0;
?>

@foreach($employees as $employees)
<p class="d-lg-none">{{ $empy_id = $employees->id }}</p>
    <p class="d-lg-none">{{ $firstname = $employees->fname }} {{ $lastname = $employees->sname }}</p>
    <p class="d-lg-none">{{ $pecentage = $employees->pecentage }} </p>
    
   
@endforeach



@foreach($money as $money)
   <p class="d-lg-none"> {{ $amout = $money->amount }} </p>
    
    <?php
     $totalamount+= $amout;
    ?>
   
@endforeach

<form action="{{route('regemploysal.store')}}" method="post">
@csrf 
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
<input type="hidden" name="empy_id" class="form-control" value="{{$empy_id}}">
<input type="hidden" classs="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">
<div class="card text-center mt-2">

  <div class="card-header"> <input type="text" class="no-border " name="name" value="{{ $firstname }} {{$lastname}}"> </div>
  <div class="card-body">
  
  
    
    <table id="example" class="table table-sm">
  <thead>
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">B 50</th>
      <th class="text-center" scope="col">Lng 40</th>
      <th class="text-center" scope="col">Squr 40</th>
      <th class="text-center" scope="col">Lng 80</th>
      <th class="text-center" scope="col">Round</th>
      <th class="text-center" scope="col">Kirico</th>
      <th class="text-center" scope="col">Squr 80</th>
      <th class="text-center" scope="col">B 200</th>
      <th class="text-center" scope="col">B 300</th>
      <th class="text-center" scope="col">B 500</th>
      <th class="text-center" scope="col">B 1000</th>
    </tr>
  </thead>
  <tbody>
    @forelse($salary as $salary)
    <tr>
      <th scope="row">{{ $count++ }}</th>
      <td>{{ $totalbread50 = $salary->bread50 }}</td>
      <td>{{ $totallong40 = $salary->long40 }}</td>
      <td>{{ $totalsquare40 = $salary->square40 }}</td>
      <td>{{ $totallong80 = $salary->long80 }}</td>
      <td>{{ $totalround = $salary->round }}</td>
      <td>{{ $totalkirico = $salary->kirico }}</td>
      <td>{{ $totalsquare80 = $salary->square80 }}</td>
      <td>{{ $totalbread200 = $salary->bread200 }}</td>
      <td>{{ $totalbread300 = $salary->bread300 }}</td>
      <td>{{ $totalbread500 = $salary->bread500 }}</td>
      <td>{{ $totalbread1000 = $salary->bread1000 }}</td>
     
      <?php 
      $tbread50+= $totalbread50;
      $tlong40+= $totallong40;
      $tsquare40+= $totalsquare40; 
      $tlong80+= $totallong80;
      $tround+= $totalround;
      $tkirico+= $totalkirico;
      $tsquare80+= $totalsquare80;
      $tbread200+= $totalbread200;
      $tbread300+= $totalbread300;
      $tbread500+= $totalbread500;
      $tbread1000+= $totalbread1000;
      ?>
    </tr>
   @empty
   <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>
      <td>empty</td>

    @endforelse
    <tr>
      <th scope="row">Total</th>
      <td>{{ $tbread50 }}</td>
      <td>{{ $tlong40 }}</td>
      <td>{{ $tsquare40 }}</td>
      <td>{{  $tlong80 }}</td>
      <td>{{  $tround }}</td>
      <td>{{ $tkirico }}</td>
      <td>{{ $tsquare80 }}</td>
      <td>{{ $tbread200 }}</td>
      <td>{{ $tbread300 }}</td>
      <td>{{ $tbread500 }}</td>
      <td>{{ $tbread1000 }}</td>
    </tr>
    <tr>
      <th scope="row">TM</th>
      <td>{{ $tbread50 * $price->bread50  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tlong40 * $price->bread50  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tsquare40 * $price->bread50  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{  $tlong80 * $price->bread100  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{  $tround * $price->bread100  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tkirico * $price->bread100  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tsquare80 * $price->bread100  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tbread200 * $price->bread200  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tbread300 * $price->bread300  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tbread500 * $price->bread500  }} <i class="fas fa-money-bill-1-wave"></i></td>
      <td>{{ $tbread1000 * $price->bread1000  }} <i class="fas fa-money-bill-1-wave"></i></td>
    </tr>
    
  </tbody>
</table>

    
   
  </div>

</div>






<div class="row mt-2">
  <div class="col-md-1"></div>
    <div class="col-md-4">


    <div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
    
    
    <table class="table table-sm card-text table-borderless">
    <tr>
        <th><b> total money:</b></th>
        <td>{{ $totalmoney = (($tbread50 + $tlong40 + $tsquare40 ) * $price->bread50 ) + (( $tlong80 + $tround + $tkirico + $tsquare80 ) * $price->bread100 ) + ( $tbread200 * $price->bread200) + ( $tbread300 * $price->bread300 ) + ( $tbread500 * $price->bread500) + ( $tbread1000 * $price->bread1000) }}  <i class="fas fa-money-bill-1-wave"></i></td>
    </tr>
    <tr>
        <th><b> workers payment</b></th>
        <td>{{ $totalamount }} <i class="fas fa-money-bill-1-wave"></i></td>
    </tr>
    <tr>
        <th><b> balance left</b></th>
        <td>{{ $balance = $totalmoney - $totalamount }} <i class="fas fa-money-bill-1-wave"></i></td>
    </tr>
    <tr>
        <th><b> workers %</b></th>
        <td>{{ $pecentage }}</td>
    </tr>
</table>

    
    
  </div>
 
</div>





    </div>
   
    <div class="col-md-6">
      

    <div class="card text-center">
  <div class="card-header ">salary</div>
  <div class="card-body">
  
  

    <p class="card-text fs-1"><input type="text" class="no-border text-center" name="salary" value="{{ (($pecentage/100) *  $totalmoney) - $balance }}"> </p>
    
  </div>
  <div class="card-footer text-muted"><button class = "btn button-prevent-multiple-submits btn-lg btn-info w-100 p-1">save payment</button></div>
</div>


    </div>
    <div class="col-md-1"></div>
</div>

</form>


@stop




