<?php

namespace App\Http\Controllers;

use App\Http\Requests\registeremploysalrequest;
use App\Models\regemploysal;
use Illuminate\Support\Facades\DB;

class RegemploysalController extends Controller
{
    public function show($id)
    {

        $list = DB::table('regemploysals')
            ->select('empy_id', 'salary', 'id', 'name', 'date')
            ->where('empy_id', $id)
            ->latest()
            ->get();

        return view('employee.sallist', compact('list'));
    }

    public function store(registeremploysalrequest $request)
    {
        $regemploysal = regemploysal::create($request->validated());

        return redirect('regemploysal/'.$regemploysal->empy_id)->with('msgs', 'successfully updated');

    }

    public function edit(regemploysal $regemploysal)
    {

        return view('employee.editregsal', ['regemploysal' => $regemploysal]);

    }

    public function destroy(regemploysal $regemploysal)
    {

        $regemploysal->delete();

        return redirect('regemploysal/'.$regemploysal->empy_id)->with('msgs', 'successfully updated');
    }
}
