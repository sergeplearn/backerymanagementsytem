@extends('layouts.app')
@section('content')


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="needs-validation from-prevent-multiple-submits" novalidate
                    action="{{ route('priceofbread.update',$priceofbread) }}" method="post">

                    @csrf
                    @method('patch')



                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread50" class="form-control" value="{{$priceofbread->bread50}}" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>

                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread100" value="{{$priceofbread->bread100}}" class="form-control" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>

                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread200" value="{{$priceofbread->bread200}}" class="form-control" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>

                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread300" value="{{$priceofbread->bread300}}" class="form-control" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>

                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread500" value="{{$priceofbread->bread500}}" class="form-control" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>

                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="bread1000" value="{{$priceofbread->bread1000}}" class="form-control" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">please enter and amount.</div>
                    </div>




                    <div class="form-group m-5">

                        <button type="submit"
                            class="btn btn-primary btn-block mb-4 btn-rounded button-prevent-multiple-submits">Submit <i
                                class="far fa-paper-plane fa-lg"></i></button>
                    </div>


                </form>







            </div>

        </div>
    </div>
</div>














@include('alert.alert')





<div class="m-4 w-70">


    <button type="button" class="btn mb-2 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
        + price of bread
    </button>



    <div class="card ">
        <div class="card-header text-center">price per bread</div>

        
           
        <div class="card-body text-center">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

            <table class="table">
              
                <tr>
                    <th>
                    bread50
</th>
<td>
{{ $priceofbread->bread50 }}
</td>
</tr>
<tr>
<th>
                    bread100
</th>
<td>
{{ $priceofbread->bread100 }}
</td>
</tr>
<tr>
<th>
                    bread200
</th>
<td>
{{ $priceofbread->bread200 }}
</td>
</tr>
<tr>
<th>
                    bread300
</th>
<td>
{{ $priceofbread->bread300 }}
</td>
</tr>
<tr>
<th>
                    bread500
</th>
<td>
{{ $priceofbread->bread500 }}
</td>
</tr>
<tr>
 <th>
                    bread100
</th>
<td>
{{ $priceofbread->bread1000 }}
</td>
</tr>



</table>

            </div>
            <div class="col-md-3"></div>
        </div>

  
           


        </div>

        

    </div>




</div>


@stop