<?php

namespace App\Http\Controllers;

use App\Http\Requests\employeesvalid;
use App\Models\employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = $employee = employee::all();

        return view('employee.index', ['employee' => $employee]);
    }

    public function store(employeesvalid $request)
    {

        $this->authorize('create', employee::class);
        $request->user()->employees()->create($request->validated());

        return redirect('/employee')->with('msgs', 'successfully updated');
    }

    public function salary(employee $employee)
    {

        return view('employsal.paydate', ['employ' => $employee]);
    }

    public function edit(employee $employee)
    {

        return view('employee.edite', ['employee' => $employee]);
    }

    public function update(employeesvalid $request, employee $employee)
    {
        $this->authorize('update', $employee);
        $employee->update($request->validated());

        return redirect('/employee')->with('msgs', 'successfully updated');
    }

    public function destroy(employee $employee)
    {
        $this->authorize('delete', $employee);
        $employee->delete();

        return redirect()->route('employee.index');
    }
}
