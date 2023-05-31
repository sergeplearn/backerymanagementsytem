<?php

namespace App\Http\Controllers;
use App\Events\NewEmployeeRegisteredEvent;
use App\Models\employee;
use App\Http\Requests\employeesvalid;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Jobs\welcomejob;


class EmployeeController extends Controller
{


  public function index()
  {
    $employee = $employee = employee::all();
    return view('employee.index', ['employee' => $employee]);
  }



  public function store(employeesvalid $request)
  {

    if (Gate::denies('isUser')) {
    $request->user()->employees()->create($request->validated());
     // event(new NewEmployeeRegisteredEvent($employee));
     $details = "serge";
     welcomejob::dispatch($details);
      return redirect('/employee')->with('msgs', 'successfully updated');


    } else {
      return redirect('/error');
    }



  }




  public function salary(employee $employee)
  {

    return view('test.delete', ['employ' => $employee]);
  }




  public function edit(employee $employee)
  {
    
     return view('employee.edite', ['employee' => $employee]);
  }


  public function update(employeesvalid $request, employee $employee)
  {

    if (!Gate::allows('isUser')) {
      
      $employee->update($request->validated());

      return redirect('/employee')->with('msgs', 'successfully updated');


    } else {
      return redirect('/error');
    }



  }



  public function destroy(employee $employee)
  {
    $employee->delete();
    return redirect()->route('employee.index');
  }


}