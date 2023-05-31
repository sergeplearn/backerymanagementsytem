


@extends('layouts.app')
@section('content')



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
    
    <div class="card text-center">
  <div class="card-header">Supplied Items</div>
  <div class="card-body">
    

    
            <table id="example" class="table table-bordered table-sm bg-white">
            <thead>   
            <tr>
                    <th>No</th>
                    <th>bread50</th>
                    <th>long40</th>
                    <th>sqr40</th>
                    <th>lng80</th>
                    <th>rund</th>
                    <th>kirico</th>
                    <th>squr80</th>
                    <th>bread200</th>
                    <th>b300</th>
                    <th>b 500</th>
                    <th>b1000</th>
                    <th>b1000</th>
                   
                </tr>
                </thead> 
                <tbody>
                @foreach($command as $command)
                <tr>
                <td><p class="fw-normal mb-1">{{ $count++ }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->bread50 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->long40 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->square40 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->long80 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->round }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->kirico }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->square80 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->bread200 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->bread300 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->bread500 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $command->bread1000 }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $amount = (($command->bread50 + $command->long40 + $command->square40) * $bread50) + (($command->long80 + $command->round + $command->kirico + $command->square80) * $bread100) + ($command->bread200 * $bread200) + ($command->bread300 * $bread300) + ($command->bread500 * $bread500) + ($command->bread1000 * $bread1000) }}  </p></td>
              <?php
              $sum+= $amount;
              ?>
                 </tr>
                @endforeach
                </tbody>
            </table>
       
          



  </div>
 
</div>



<?php
      $backofflower = $sum/50000;
      
      ?>


<div class="card text-center mt-3">
  <div class="card-header">Supplied Items</div>
  <div class="card-body">
    

  <table class="table table-sm">
    <thead>
    <tr>
      <th>total amount</th>
      <th>bags flours</th>
      <th>date</th>
      <th>submit</th>
    </tr>
    </thead>
    <form action="/now" method="post">
@csrf 
    <tbody>
      <tr>
        <td>
        {{ $sum }} 
        </td>
        <td>
        <input type="text" name="flour" value="{{ $backofflower}}">
        </td>
        <td>
        <input type="text" name="date" value="<?php echo date("Y/m/d") ?>" >
        </td>
        <td>
        <button type="submit" class="btn ">hello <i class="far fa-paper-plane fa-lg"></i></button>
        </td>
      </tr>
    </tbody>
    </form>
  </table>

  

   
      
    
         
          



  </div>
  <div class="card-footer text-muted">date</div>
</div>




   
      
   
    


 




@stop




