<?php

namespace App\Http\Controllers;

use App\Http\Requests\expenditures;
use App\Models\expenditure;
use Illuminate\Support\Facades\Gate;

class ExpenditureController extends Controller
{
    public function store(expenditures $request)
    {
        if ((Gate::allows('isAdmin')) || (Gate::allows('isUser'))) {
            expenditure::create($request->validated());

            return redirect('/expenditure')->with('msgs', 'successfully updated');

        } else {
            return redirect('/error');
        }

    }

    public function index()
    {
        $expen = expenditure::all();

        return view('expenditure.show', compact('expen'));
    }

    public function edit(expenditure $expenditure)
    {

        return view('expenditure.edit', ['expenditure' => $expenditure]);
    }

    public function update(expenditures $request, expenditure $expenditure)
    {

        if (! Gate::allows('isUser')) {
            $expenditure->update($request->validated());

            return redirect('/expenditure')->with('msgs', 'successfully updated');

        } else {
            return redirect('/error');
        }

    }
}
