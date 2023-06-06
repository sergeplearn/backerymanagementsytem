<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationrequest;
use App\Models\bread;
use App\Models\employee;
use App\Models\priceofbread;
use Illuminate\Support\Facades\Gate;

class BreadController extends Controller
{
    public function show($id)
    {

        $money = employee::find($id)->moneys;
        $price = priceofbread::find(1);
        $breadtaken = employee::find($id)->breads;
        $employees = employee::find($id);

        return view('breads.onemanbread', ['breadtaken' => $breadtaken, 'money' => $money, 'employees' => $employees, 'price' => $price]);
    }

    public function store(CreateValidationrequest $request)
    {

        // if ((Gate::allows('isAdmin')) || (Gate::allows('isUser')) ) {

        bread::create($request->validated());

        return back();
        //}else{
        //  return redirect('/error');
        //}

    }

    public function edit(bread $bread)
    {

        return view('breads.edit', compact('bread'));

    }

    public function update(CreateValidationrequest $request, bread $bread)
    {

        //if (Gate::allows('isAdmin')) {

        $bread->update($request->validated());

        return redirect('bread/'.$bread->emply_id)->with('msgs', 'successfully updated');
        //        }else{
        //          return redirect('/error');
        //    }

    }
}
