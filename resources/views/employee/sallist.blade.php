
@extends('layouts.app')
@section('content')






 
<?php
  function money($amount) {
   echo 'CFA ' . number_format($amount, 2);
};


?>

@include('alert.alert')


<?php
$number = 1;
?>

<div class="card text-center">
  <div class="card-header">record of payed salary</div>
  <div class="card-body">
    <table class="table table-sm" id="example">
    <thead>
        <tr>
            <th class="text-center">no</th>
            <th class="text-center">name</th>
            <th class="text-center">date</th>
            <th class="text-center">salary</th>
            <th class="text-center">Delete</th>
            </tr>
    </thead>
    <tbody>
        @foreach( $list as $sal)
        <tr>
            <td>{{ $number++}}</td>
            <td>{{ $sal->name }}</td>
            <td>{{ $sal->date }}</td>
            <td>{{ $sal->salary }} <i class="fas fa-money-bill-1-wave"></i></td>
            <td>

            
            
           
            <a href="{{route('regemploysal.edit',$sal->id)}}" class="btn btn-outline-primary btn-sm d-inline btn-rounded"data-mdb-ripple-color="dark">edit</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>



  </div>
  
</div>




@stop














