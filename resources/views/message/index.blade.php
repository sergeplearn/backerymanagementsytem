


@extends('layouts.app')
@section('content')

<?php
$date = date("Y/m/d");
?>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="{{ route('message.store') }}" method="post">

           

            @csrf
           
            

         
  <div class="form-outline mb-4">
    <input type="text" name="message" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">enter message</label>
  </div>

  
  

 



  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>



            </form>

      </div>
     
    </div>
  </div>
</div>











  

  <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 message
</button>



<ul class="list-group list-group-light">
  @foreach($message as $message)
  <li class="list-group-item">{{ $message->message }}</li>
  <li class="list-group-item"><a href="{{route('message.edit', $message)}}">Edit</a></li>
  @endforeach
</ul>









 


@stop