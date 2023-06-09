


@extends('layouts.app')
@section('content')


<h1>my first mail to mailtrap.io</h1>

<?php 
$totalbread50 = 0;
$totallong40 = 0;
$totalsquare40 = 0;
$totallong80 = 0;
$totalround = 0;
$totalkirico = 0;
$totalsquare80 = 0;
$totalbread200 = 0;
$totalbread300 = 0;
$totalbread500 = 0;
$totalbread1000 = 0;
$totalmoneycolected = 0;
$totalitems = 0;
$totalexternal = 0;
$totalsalayinput = 0;
$totalregemploysals = 0;


?>

<p class = "invisible">
   <p class = "invisible">taken out today</p>
    @foreach($employee as $serge)
    
    
        {{$bread50 = $serge->bread50 }}
       {{$long40 = $serge->long40 }}
        {{$square40 = $serge->square40 }}
        {{$long80 = $serge->long80 }}
        {{$round = $serge->round }}
        {{$kirico = $serge->kirico }}
        {{$square80 = $serge->square80 }}
        {{$bread200 = $serge->bread200 }}
        {{$bread300 = $serge->bread300 }}
        {{$bread500 = $serge->bread500 }}
        {{$bread1000 = $serge->bread1000 }}

    <?php
      $totalbread50 += $bread50;
        $totallong40 += $long40;
        $totalsquare40 += $square40;
        $totallong80 += $long80;
        $totalround += $round;
        $totalkirico += $kirico;
        $totalsquare80 += $square80;
        $totalbread200 += $bread200;
        $totalbread300 += $bread300;
        $totalbread500 += $bread500;
        $totalbread1000 += $bread1000;
        
        ?>
@endforeach  

</p>

<div class="row p-3">

    <div class="col-md-6 text-center ">
        <div class="card p-2">
            <h4>title</h4>
            <table class="table table-sm">
    <tr>
        <th>bread50</th>
        <td>{{$totalbread50}}</td>
    </tr>
    <tr>
        <th>long40</th>
        <td>{{$totallong40}}</td>
    </tr>
    <tr>
        <th>square40</th>
        <td>{{$totalsquare40}}</td>
    </tr>
    <tr>
        <th>long80</th>
        <td>{{$totallong80}}</td>
    </tr>
    <tr>
        <th>round</th>
        <td>{{$totalround}}</td>
    </tr>
    <tr>
        <th>kirico</th>
        <td>{{$totalkirico}}</td>
    </tr>
    <tr>
        <th>square80</th>
        <td>{{$totalsquare80}}</td>
    </tr>
    <tr>
        <th>bread200</th>
        <td>{{$totalbread200}}</td>
    </tr>
    <tr>
        <th>bread300</th>
        <td>{{$totalbread300}}</td>
    </tr>
    <tr>
        <th>bread500</th>
        <td>{{$totalbread500}}</td>
    </tr>
    <tr>
        <th>bread1000</th>
        <td>{{$totalbread1000}}</td>
    </tr>
  </table> 

  <p > <span>total money in</span> {{ $totalbread = (($totalbread50 + $totallong40  + $totalsquare40) * 50 ) + (($totallong80 + $totalround + $totalkirico + $totalsquare80) * 100) + ($totalbread200 * 200) + ($totalbread300 * 300) + ($totalbread500 * 500) + ($totalbread1000 * 1000)  }}</p>

        </div>
</div>


<div class="col-md-6 text-center ">
        <div class="card p-2">
            <h4>title</h4>
            write anything insiede here
        </div>
    
</div>



</div>



<p class = "invisible" >items supplied</p>
<p class = "invisible">
@foreach($itemsupplieds as $itemsupplieds)
{{ $items = $itemsupplieds->amount }}
<?php
$totalitems += $items;
?>
@endforeach

</p>

<p class = "invisible" >money collected from the workers
@foreach($money as $money)
    
    
        {{ $moneycollected = $money->amount }}

<?php $totalmoneycolected += $moneycollected; ?>

    @endforeach
    </p>
<p class = "invisible" >expenditure</p>
<p class = "invisible" >
    @foreach($expense as $expense)
    {{ $external = $expense->amount}}
    <?php 
    $totalexternal += $external;
    ?>
    @endforeach
</p>



    <p class = "invisible">payment of house workers</p>
    <p class = "invisible">
    @foreach($housesalary as $housesalary)
    {{ $salayinput = $housesalary->salary}}
    <?php 
   $totalsalayinput += $salayinput;
    ?>
    @endforeach

</p>
<p class = "invisible">
   @foreach($regemploysals as $regemploysals)
  {{ $regemploysals = $regemploysals->salary }}
  <?php
  $totalregemploysals += $regemploysals;
  ?>
   @endforeach
   </p>


        <div class="card p-3">
            <h4>title</h4>
          <table class="table table-sm">
          <tr>
<th>bread taken out</th>
<td> {{ $totalbread }} </td>
</tr>
<tr>
<th>total money collected</th>
<td> {{ $totalmoneycolected }} </td>
</tr>
<tr>
<th>expenditures</th>
<td> {{ $totalitems + $totalexternal + $totalsalayinput + $totalregemploysals }} </td>
</tr>
          </table>
        </div>
    








@stop