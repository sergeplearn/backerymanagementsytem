@extends('layouts.app')
@section('content')






<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

   

<div class="card text-center">
  <div class="card-header">Edit Order For Bread</div>
  <div class="card-body">
   
    <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{ route('bread.update',$bread) }}" method="post">

       @csrf 
       @method('patch')
       <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
       <input type="hidden" name="user_id" value="{{ $bread->user_id }}" >
 <input type="text" name="emply_id" value="{{ $bread->emply_id }}" class="form-control">
 <input type="hidden" name="ref_code" value="{{ $bread->ref_code }}" class="form-control">
 <input type="hidden" name="date" value="{{ $bread->date }}" class="form-control">

   




<div class="row g-3">

    <div class="col-md-5">
    <table class="table">
    <tr>
        <th>Bread 50</th>
        <td><input type="text" name="bread50" class="form-control" aria-describedby="inputGroupPrepend" value="{{ $bread->bread50}}" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
     
    </tr>
    <tr>
        <th>log 40</th>
        <td><input type="text" name="long40" value="{{ $bread->long40}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
       
    </tr>
    <tr>
        <th>square 40</th>
        <td><input type="text" name="square40" value="{{ $bread->square40}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>long 80</th>
        <td><input type="text" name="long80" value="{{ $bread->long80}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>round</th>
        <td><input type="text" name="round" value="{{ $bread->round}}" class="form-control"aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>kirico </th>
        <td><input type="text" name="kirico" value="{{ $bread->kirico}}" class="form-control"aria-describedby="inputGroupPrepend" required>
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
        <td><input type="text" name="square80" value="{{ $bread->square80}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 200</th>
        <td><input type="text" name="bread200" value="{{ $bread->bread200}}"class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    
    <tr>
        <th>bread 300</th>
        <td><input type="text" name="bread300" value="{{ $bread->bread300}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 500</th>
        <td><input type="text" name="bread500" value="{{ $bread->bread500}}" class="form-control" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    <tr>
        <th>bread 1000</th>
        <td><input type="text" name="bread1000" value="{{ $bread->bread1000}}" class="form-control"aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">Please choose a username.</div>
    </td>
    </tr>
    
</table>

<div class="form-group">
       <p></p>
<button type="submit" class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Submit   <i class="far fa-paper-plane fa-lg"></i></button>
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