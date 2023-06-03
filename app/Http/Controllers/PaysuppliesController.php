<?php

namespace App\Http\Controllers;

use App\Http\Requests\paysuppliesrequest;
use App\Models\paysupplie;
use App\Models\supply;
use Illuminate\Support\Facades\Gate;

class PaysuppliesController extends Controller
{
    public function show($id)
    {
        $supply = $id;
        $paysupply = supply::find($id)->paysupplie;

        return view('supplymoney.show', ['paysupply' => $paysupply, 'supply' => $supply]);

    }

    public function store(paysuppliesrequest $request)
    {
        if ((Gate::allows('isAdmin')) || (Gate::allows('isUser'))) {
            $collectmony = paysupplie::create($request->validated());

            return redirect('paysupplie/'.$collectmony->ref_supply)->with('msgs', 'successfully updated');

        } else {
            return redirect('/error');
        }

    }

    public function edit(paysupplie $paysupplie)
    {

        return view('supplymoney.edit', compact('paysupplie'));

    }

    public function update(paysuppliesrequest $request, paysupplie $paysupplie)
    {
        if (! Gate::allows('isUser')) {

            $paysupplie->update($request->validated());

            return redirect('paysupplie/'.$paysupplie->ref_supply)->with('msgs', 'successfully updated');

        } else {
            return redirect('/error');
        }

    }
}
