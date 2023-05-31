<?php

namespace App\Http\Controllers;
use App\Models\advance;
use App\Http\Requests\advancesalary;
use App\Models\houseworkers;
use Illuminate\Support\Facades\Gate;

class AdvanceController extends Controller
{
    public function store(advancesalary $request)
    {
        if (!Gate::allows('isUser')) {
          $request->user()->advances()->create($request->validated());
            return back();
        } else {
            return redirect('/error');
        }


    }

   //public function show()
    //{
      //  $advance = advance::all();
        //return view('/advancesal.show', compact('advance'));
    //}


    public function show($id)
    {
        $houseid = $id;
        $advance = houseworkers::find($id)->advances;
        return view('advancesal.show', ['advance' => $advance, 'houseid' => $houseid]);
    }


    public function edit(advance $advance)
    {
       return view('advancesal.edit', ['advance'=>$advance]);
    }


    public function update(advancesalary $request, advance $advance)
    {
        if (!Gate::allows('isUser')) {
            $advance->update($request->validated());
            return redirect('advance/' . $advance->house_id)->with('msgs', 'successfully updated');
        } else {
            return redirect('/error');
        }


    }

}