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


                <form class="needs-validation from-prevent-multiple-submits" novalidate action="{{route('advance.store')}}"
                    method="post">

                    @csrf
                  
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" class="form-control">
                    <input type="hidden" name="house_id" value="{{ $houseid }}" class="form-control">
                    <input type="hidden" name="date" value="<?php echo date("Y/m/d") ?>" class="form-control">



                    <div class="form-group ">
                        <label for="validationServer03" class="form-label">enter the amount</label>
                        <input type="text" name="amount" class="form-control" aria-describedby="inputGroupPrepend"
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
<?php
$count = 1;
$tatal_amount = 0;
?>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        <button type="button" class="btn mb-3 btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
            + Advance salary
        </button>

        <div class="card ">
            <div class="card-header text-center">all advance salary</div>
            <div class="card-body">



                <table id="example" class="table table-sm vertical-align text-center">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">#</th>
                            <th class="text-center" scope="col">Date Of Payment</th>
                            <th class="text-center" scope="col">Amount</th>
                            <th class="text-center" scope="col">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($advance as $advance)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td>{{ $advance->created_at }}</td>
                            <td>{{$amount = $advance->amount}} <i class="fas fa-money-bill-1-wave"></i></td>

                            <td>@can('isAdmin')<a class="btn info" data-mdb-ripple-color="dark"
                                    href="{{ route('advance.edit',$advance->id) }}"><i
                                        class="fas fa-pen-to-square fa-lg"></i></a>@endcan</td>


                        </tr>
                        <?php
      $tatal_amount+= $amount
      ?>

                        @endforeach


                    </tbody>
                </table>

                <p class="card-text text-center"><b>Total Amount:</b> <?php
    echo $tatal_amount
      ?></p>


            </div>

        </div>


    </div>
    <div class="col-md-1"></div>
</div>



@stop