
@extends('layouts.app')
@section('content')

<div class="card">
<table class = "table">
    <thead>
        <tr>
            <th>no</th>
            <th>date</th>
            <th>amount</th>
            <th>edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rentpayment as $rentpayment)
        <tr>
        <td>no</td>
        <td>{{ $rentpayment->date }}</td>
        <td>{{ $rentpayment->amount }}</td>
        <td>
            
    <a href="{{route('rentpayment.edit', $rentpayment)}}">Edit</a>
    
    </td>
    </tr>
        @endforeach
    </tbody>
</table>
</div>
@stop