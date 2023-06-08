<?php

namespace App\Http\Controllers;

use App\Models\priceofbread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeSalary extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $price = priceofbread::find(1);
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

        return view('employsal.salary', ['salary' => $salary, 'money' => $money, 'employees' => $employees, 'price' => $price]);

    }
}
