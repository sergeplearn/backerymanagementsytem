


@extends('layouts.app')
@section('content')



<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('itemsupplied.store')}}" method="post">

@csrf 
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
<input type="hidden" name="ref_supply" class="form-control" aria-describedby="inputGroupPrepend" value="{{ $supply_id }}">
<input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">



<div class="form-group ">
<label for="validationServer03" class="form-label">name of item</label>
<select name="item" id="" class="form-select from-select-sm form-rounded" arial-lable=".form-select-sm example"require>
<option selected>open this select menu</option>
<option value="flour">flour</option>
<option value="sugar">sugar</option>
<option value="gass">gass buttol</option>
<option value="yeast">yeast</option>
<option value="color">color</option>
<option value="oil">oil</option>
<option value="Butter">butter</option>
<option value="egg">egg</option>
<option value="salt">salt</option>

</select>






<div class="invalid-feedback">enter the full name.</div>
</div>








<div class="form-group ">
<label for="validationServer03" class="form-label">number of item</label>
<input type="text" name="number" class="form-control" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">enter the number of items.</div>
</div>




<div class="form-group ">
<label for="validationServer03" class="form-label">price per item</label>
<input type="text" name="itemprice" class="form-control" aria-describedby="inputGroupPrepend" required>
<div class="invalid-feedback">enter the price per item.</div>
</div>








<div class="form-group ">

<button type="submit" class="btn btn-primary btn-block  btn-rounded button-prevent-multiple-submits">Submit  <i class="far fa-paper-plane fa-lg"></i></button>
</div>


</form>



         
      </div>
     
    </div>
  </div>
</div>















<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
 + more info
</button>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

 <p>hello to all</p>




         
      </div>
     
    </div>
  </div>
</div>




@include('alert.alert')
<?php $count = 1;
$costofallgood = 0;
$totalpayedin = 0;

?>
<div class="m-4 w-70">
   <button type="button" class="btn mb-3 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
 + Add New Items
</button>
    
    <div class="card text-center">
  <div class="card-header">Supplied Items</div>
  <div class="card-body">
    

    
            <table id="example" class="table align-middle  table-sm  mb-0 bg-white">
            <thead>   
            <tr>
                    <th class="text-center">item name</th>
                    <th class="text-center">number of items</th>
                    <th class="text-center">price per item</th>
                    <th class="text-center">total price</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">@can('isAdmin') Edit @endcan</th>
                    <th class="text-center"> Delete </th>
                   
                </tr>
                </thead> 
                <tbody>
                @foreach($items as $item)
                <tr>
                <td><p class="fw-normal mb-1">{{ $item->item }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $item->number }}</p></td>
                 <td><p class="fw-normal mb-1">{{ $item->itemprice }} <i class="fas fa-money-bill-1-wave"></i></p></td>
                 <td><p class="fw-normal mb-1">{{ $totalprice = $item->itemprice * $item->number }} <i class="fas fa-money-bill-1-wave"></i></p></td>
                 <td><p class="fw-normal mb-1">{{ $item->created_at }}</p></td>
                 <td>@can('isAdmin')
                  <a class="btn btn-info"data-mdb-ripple-color="dark" href="{{route('itemsupplied.edit',$item->id) }}"><i class="fas fa-pen-to-square fa-lg"></i></a>@endcan</td><td> 
       <form action="{{route('itemsupplied.destroy',$item->id) }}" method="post">
      @csrf
      @method('DELETE')
       <button class="btn btn-danger"data-mdb-ripple-color="dark"><i class="fas fa-trash fa-lg" ></i></button>
       </form>  
    </td>
               
               <?php 
                $costofallgood+= $totalprice;
                ?>
                 </tr>
                @endforeach
                </tbody>
            </table>
       




  </div>
  
</div>


</div>


@foreach($supplymoney as $money)

<p class="d-lg-none">{{ $payment = $money->amount}}</p>
<?php
$totalpayedin+= $payment
?>
@endforeach
<div class="m-4  w-50">
<div class="card text-center mt-3">
  <div class="card-header">Total money customer need to pay</div>
  <div class="card-body">
    
    <table class="table  table-sm ">
      <thead>
        <tr>
          <th><b>Total Money</b></th>
          <th><b>Backery payment</b></th>
          <th> <b>Balances</b></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        
  
        <tr>
           
            <td>
                
            <?php 
               echo $costofallgood;
                ?>
            </td>
        
            
            <td>
                
            <?php 
               echo $totalpayedin;
                ?>
            </td>
        
            <td>
                
            <?php 
               echo $costofallgood - $totalpayedin;
                ?>
            </td>
        </tr>
        </tbody>
    </table>
  
  </div>
 
</div>
</div>
 




@stop




