<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeSalary extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $emp = request('salary');
        $start = request('start');
        $end = request('stop');
        $money = DB::table('money')
            ->select('emply_id', 'amount', 'id')
            ->whereBetween('date', [$start, $end])
            ->where('emply_id', $emp)
            ->get();

        $employees = DB::table('employees')->where('id', $emp)->get();
        $salary = DB::table('breads')->where('breads.emply_id', $emp)->whereBetween('breads.date', [$start, $end])->get();

        return view('test.show', ['salary' => $salary, 'money' => $money, 'employees' => $employees]);

    
    }
}