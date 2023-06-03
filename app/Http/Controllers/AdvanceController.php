<?php

namespace App\Http\Controllers;

use App\Http\Requests\advancesalary;
use App\Models\advance;
use App\Models\houseworker;
use Illuminate\Support\Facades\Gate;

class AdvanceController extends Controller
{
    public function store(advancesalary $request)
    {
        if (! Gate::allows('isUser')) {
            $request->user()->advances()->create($request->validated());

            return back();
        } else {
            return redirect('/error');
        }

    }

   
    public function show($id)
    {
        $houseid = $id;
        $advance = houseworker::find($id)->advances;

        return view('advancesal.show', ['advance' => $advance, 'houseid' => $houseid]);
    }

    public function edit(advance $advance)
    {
        return view('advancesal.edit', ['advance' => $advance]);
    }

    public function update(advancesalary $request, advance $advance)
    {
        if (! Gate::allows('isUser')) {
            $advance->update($request->validated());

            return redirect('advance/'.$advance->house_id)->with('msgs', 'successfully updated');
        } else {
            return redirect('/error');
        }

    }
}
