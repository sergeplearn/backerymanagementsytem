<?php

namespace App\Http\Controllers;

use App\Http\Requests\payment;
use App\Models\money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class MoneyController extends Controller
{
    public function show($id)
    {
        $workerid = $id;
        $money = DB::table('money')
            ->select('money.emply_id', 'money.amount', 'money.created_at', 'money.id')
            ->where('money.emply_id', $id)
            ->latest()
            ->get();

        return view('emmoney.show', ['money' => $money, 'workerid' => $workerid]);

    }

    public function store(Request $request)
    {
        if ((Gate::allows('isAdmin')) || (Gate::allows('isUser'))) {

            $validated = $request->validate([
                'amount' => 'required|max:255',
                'emply_id' => 'required|max:255',
                'date' => 'required|max:255',

            ]);

            $request->user()->moneys()->create($validated);

            return back()->with('msgs', 'successfully updated');

        } else {
            return redirect('/error');
        }

    }

    public function edit(money $money)
    {

        return view('emmoney.edit', ['money' => $money]);
    }

    public function update(payment $request, money $money)
    {
        //if (!Gate::allows('isUser')){

        $this->authorize('update', $money);
        $money->update($request->validated());

        return redirect('money/'.$money->emply_id)->with('msgs', 'successfully updated');

        // }else{
        //   return redirect('/error');
        //}

    }

    public function destroy(money $money)
    {
        //if((Gate::denies('isUser'))&&(Gate::denies('isAdmin'))){

        $money->delete();

        return redirect('money/'.$money->emply_id);

        // }else{
        //   return view('error.404');
        // }

    }
}
