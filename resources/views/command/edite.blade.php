@extends('layouts.app')
@section('content')






<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

   

<div class="card text-center">
  <div class="card-header">command bread</div>
  <div class="card-body">
   
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{ route('command.update',$command->id) }}" method="post">

       @csrf 
       @method('patch')
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
 <input type="hidden" name="emply_id" value="{{ $command->emply_id }}" class="form-control">
 <input type="hidden" name="id" value="{{ $command->id }}" class="form-control">
 <input type="hidden" name="user_id" value="{{ $command->user_id }}" >
 <input type="hidden" name="date" value="{{ $command->date }}" class="form-control">

   




<div class="row g-3">

    <div class="col-md-5">
    <table class="table">
    <tr>
        <th>Bread 50</th>
        <td><input type="text" name="bread50" value="{{ $command->bread50 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
     
    </tr>
    <tr>
        <th>log 40</th>
        <td><input type="text" name="long40" value="{{ $command->long40 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
       
    </tr>
    <tr>
        <th>square 40</th>
        <td><input type="text" name="square40" value="{{ $command->square40 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>long 80</th>
        <td><input type="text" name="long80" value="{{ $command->long80 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>round</th>
        <td><input type="text" name="round" value="{{ $command->round }}" class="form-control"aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>kirico </th>
        <td><input type="text" name="kirico" value="{{ $command->kirico }}" class="form-control"aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    
    </table>
    </div>


    <div class="col-md-1"></div>


    <div class="col-md-5">
        <table class="table">
       
    <tr>
        <th>square 80</th>
        <td><input type="text" name="square80" value="{{ $command->square80 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 200</th>
        <td><input type="text" name="bread200" value="{{ $command->bread200 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    
    <tr>
        <th>bread 300</th>
        <td><input type="text" name="bread300" value="{{ $command->bread300 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 500</th>
        <td><input type="text" name="bread500" value="{{ $command->bread500 }}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 1000</th>
        <td><input type="text" name="bread1000" value="{{ $command->bread1000 }}" class="form-control"aria-describedby="inputGroupPrepend" required>
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
    <div class="col-md-2"></div>
</div>





 

@stop