

<!--<meta http-equiv="refresh" content="30;url=logout.php" />-->
@extends('layouts.app')
@section('content')
<?php
$sum = 0;
$incs = 0;

 

?>

<p class="d-lg-none">
    @foreach($houseworkers as $houseworkers)
    {{ $first = $houseworkers->fname }} {{ $last = $houseworkers->sname }}
    {{ $worker = $houseworkers->id }}
    {{ $sal = $houseworkers->salary }}
   
        @endforeach
    </p>

<p class="d-lg-none">
    @foreach($salary as $salary)
    
    {{ $totaladvance = $salary->amount }}
   
    <?php
   
$sum+= $totaladvance;
?>
    @endforeach
</p>

<p class="d-lg-none">
    @foreach($increment as $increment)
    {{ $increments = $increment->amount }}
   
    <?php
$incs+= $increments;
?>
    @endforeach
</p>

<form class="from-prevent-multiple-submits" action="{{route('reghousesalary.store')}}" method="post">
@csrf 
<input type="hidden" name="house_id" value="{{ $worker }}" >

<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
    <input type="text" class="invisible" name="date" value="<?php echo date("Y/m/d") ?>">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">

    <div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
  

     <table class="table table-sm card-text">
        <tr>
            <th>Name</th>
            <td> <input type="text" class="form-control no-border " name="name" value ="{{ $first }}   {{ $last }}">  </td>
        </tr>
        <tr>
            <th>Advance</th>
            <td>{{ $sum }} . <?php echo 00; ?>  <i class="fas fa-money-bill-1-wave"></i></td>
        </tr>
        <tr>
            <th>Increment</th>
            <td>{{ $incs }}. <?php echo 00; ?>  <i class="fas fa-money-bill-1-wave"></i></td>
        </tr>
        <tr>
            <th>Initail sal</th>
            <td>{{ $sal }}  <i class="fas fa-money-bill-1-wave"></i></td>
        </tr>
     </table>


    
  </div>
 
</div>




    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">


    <div class="card text-center">
  <div class="card-header">House Worker Salary</div>
  <div class="card-body">
    <h5 class="card-title"><b> <input type="text" name="salary" value = "{{ ($sal + $incs) -  $sum }}" class="form-control no-border text-center fs-2 " > </b> </h5>
   
  </div>
  <div class="card-footer text-muted"><button class = "btn button-prevent-multiple-submits btn-lg btn-info w-100 p-1">payed  <i class="far fa-paper-plane fa-lg"></i></button></div>
</div>

    </div>
    <div class="col-md-1"></div>
</div>
</form>
   
@stop