@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('sumary for the day') }}</div>

                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <th>total money made</th>
                            <td>5000000</td>
                        </tr>
                        <tr>
                            <th>total expenditor</th>
                            <td>600000</td>
                        </tr>
                        <tr>
                            <th>balance </th>
                            <td> 3000000</td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
