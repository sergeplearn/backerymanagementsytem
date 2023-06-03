<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerhousesalrequest;
use App\Models\reghousesalary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ReghousesalaryController extends Controller
{
    public function show($id)
    {

        $listsal = DB::table('reghousesalaries')
            ->select('salary', 'name', 'date', 'created_at', 'house_id', 'id')
            ->where('house_id', $id)
            ->get();

        return view('houseworker.listsal', compact('listsal'));
    }

    public function store(registerhousesalrequest $request)
    {
        if (! Gate::allows('isUser')) {

            $reghousesalary = reghousesalary::create($request->validated());

            return redirect('reghousesalary/'.$reghousesalary->house_id)->with('msgs', 'successfully updated');
        } else {
            return redirect('/error');
        }
    }

    public function edit(reghousesalary $reghousesalary)
    {
        return $reghousesalary;

    }

    public function destroy(reghousesalary $reghousesalary)
    {

        $reghousesalary->delete();

        return 'success';

    }
}
