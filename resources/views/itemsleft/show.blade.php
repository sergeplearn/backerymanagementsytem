


@extends('layouts.app')
@section('content')



<?php
$totalfour = 0;
$remain = 0;

?>
@include('alert.alert')
<div class="row m-5">
  <div class="col-md-2"></div>
  <div class="col-md-8">




    <div class="card text-center">
  <div class="card-header">Featured</div>
  <div class="card-body">
    <h5 class="card-title">remain of items</h5>

    
<table class="table table-sm">
<thead>
  <tr>
<th>items</th>
<th>number</th>
<th>date</th>
  </tr>

</thead>
<tbody>
  @foreach($salary as $items)
<tr>
<td>{{ $items->item }}</td>
<td>{{$flour = $items->number }}</td>
<td>{{ $items->date }}</td>
</tr>

<?php
$totalfour+= $flour;
?>
@endforeach
</tbody>
</table>
<p><span> <?php   echo $totalfour;     ?> </span></p>

@foreach($useditems as $items)

<p>{{$leftover = $items->flour }}</p>
<?php
$remain+= $leftover;
?>
@endforeach
   
<p><span> <?php   echo $remain;     ?> </span></p>

 
       
</div>
@can('isAdmin')
  <div class="card-footer text-muted"> <?php echo $totalfour - $remain ?></div>
  @endcan
</div>




</div>
<div class="col-md-2"></div>
</div>



@stop