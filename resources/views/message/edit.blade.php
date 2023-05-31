


@extends('layouts.app')
@section('content')

<?php
$date = date("Y/m/d");
?>




<!-- Modal -->

      <form action="{{ route('message.update',$message) }}" method="post">

           

            @csrf
           @method('patch')
            

         
  <div class="form-outline mb-4">
    <input type="text" name="message" id="form1Example2" value="{{$message->message}}" class="form-control" />
    <label class="form-label" for="form1Example2">enter message</label>
  </div>

  
  

 



  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>














  

 












 


@stop