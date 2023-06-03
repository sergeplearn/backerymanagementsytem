


$regemploysal


@extends('layouts.app')
@section('content')



<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete and employee</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>are u sure u want to delete this item</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <form action="{{ route('regemploysal.destroy',$regemploysal) }}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger">yes</i></button>
        </form>
      </div>
    </div>
  </div>
</div>




<div class="row m-5">
   
  <div class="col-md-2"></div>
  <div class="col-md-8">

  
  @include('alert.alert')
  
<div class="card text-center">
  <div class="card-header">Special title treatment</div>
  <div class="card-body">

   <table class="table">
   
    
      <td><!-- Button trigger modal -->
   
<button type="button" class="btn btn-danger w-100" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
<i class="fas fa-trash fa-lg" ></i>
</button>

</td>
    </tr>
   </table>
   

  

  </div>
 
</div>


</div>
  <div class="col-md-2"></div>
</div>




@stop