<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationrequest;
use App\Models\bread;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class BreadController extends Controller
{
    public function show($id)
    {
        $employ_id = $id;
        $employ_code = request('employ_code');

        $money = DB::table('money')
            ->where('money.emply_id', $id)
            ->select('emply_id', 'amount')
            ->latest()
            ->get();

        $breadtaken = DB::table('breads')
            ->where('emply_id', $id)
            ->select('id', 'emply_id', 'updated_at', 'created_at', 'ref_code', 'bread50', 'long40', 'square40', 'long80', 'round', 'kirico', 'square80', 'bread200', 'bread300', 'bread500', 'bread1000')
            ->latest()
            ->get();

        $employees = DB::table('employees')
            ->where('id', $id)
            ->select('employees.pecentage', 'id', 'fname', 'sname')
            ->latest()
            ->get();

        $price = DB::table('priceofbreads')
            ->where('priceofbreads.id', 1)
            ->select('bread50', 'bread100', 'bread200', 'bread300', 'bread500', 'bread1000', 'id')
            ->latest()
            ->get();

        return view('breads.onemanbread', ['breadtaken' => $breadtaken, 'money' => $money, 'employees' => $employees, 'employ_id' => $employ_id, 'employ_code' => $employ_code, 'price' => $price]);
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
