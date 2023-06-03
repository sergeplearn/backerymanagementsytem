<?php

namespace App\Http\Controllers;

use App\Http\Requests\increamentsal;
use App\Models\houseincrement;
use App\Models\houseworker;
use Illuminate\Support\Facades\Gate;

class HouseincrementController extends Controller
{
    public function store(increamentsal $request)
    {
        if (! Gate::allows('isUser')) {
            $houseincrement = houseincrement::create($request->validated());

            return redirect('houseincrement/'.$houseincrement->house_id)->with('msgs', 'successfully updated');
        } else {
            return view('error.404');
        }

    }

public function show($id)
{
    $houseworkerid = $id;
    $increment = houseworker::find($id)->houseincrements;

    return view('incrementsal.show', ['increment' => $increment, 'houseworkerid' => $houseworkerid]);

}

public function edit(houseincrement $houseincrement)
{

    return view('incrementsal.edit', ['houseincrement' => $houseincrement]);
}

public function update(increamentsal $request, houseincrement $houseincrement)
{

    if (! Gate::allows('isUser')) {
        $houseincrement->update($request->validated());

        return redirect('houseincrement/'.$houseincrement->house_id)->with('msgs', 'successfully updated');
    } else {
        return redirect('/error');
    }

}
}
