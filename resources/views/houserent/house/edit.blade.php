


@extends('layouts.app')
@section('content')




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

    
       
    

      <form action="{{route('housetype.update',$housetype)}}" method="post">

           

            @csrf
            @method('patch')
            

            <div class="form-outline mb-4">
    <input type="text" name="catigory" value="{{ $housetype->catigory }}" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">catigory</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" name="description" value="{{ $housetype->description }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">description</label>
  </div>



  <div class="form-outline mb-4">
    <input type="text" name="price" value="{{ $housetype->price }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">price</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="house_no" value="{{ $housetype->house_no }}" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">house number</label>
  </div>

 



  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>



            </form>

      </div>
     
    </div>
  </div>
</div>

</div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

    
       
    

      <form action="{{route('housetype.destroy',$housetype)}}" method="post">

           

            @csrf
            @method('delete')
            

         
 
  


  <button type="submit" class="btn btn-primary btn-block">save worker</button>
</form>



            </form>

      </div>
     
    </div>
  </div>
</div>

</div>
</div>






 
<div class="row m-5">
  <div class="col-md-1"></div>
  <div class="col-md-10">


  <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
 + deleted
</button>
  <div class="card text-center">
  <div class="card-header">house workers</div>
  <div class="card-body">
    

  <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
 + Edit
</button>

<h3>list of tenant</h3>
<table class="table">
  <thead>
    <tr>
      <th>no</th>
      <th>catigory</th>
      <th>description</th>
      <th>price</th>
      <th>house_no</th>
      <th>edit</th>
  
    </tr>
  </thead>
  <tbody>
  
  <tr>
  <td>no</td> 
    <td>{{ $housetype->catigory }}</td>  
    <td>{{ $housetype->description }}</td>  
    <td>{{ $housetype->price }}</td>  
    <td>{{ $housetype->house_no }}</td>  
     
   
    </tr>
    
  </tbody>
</table>

</div></div>

  
</div>
<div class="col-md-1">

@stop