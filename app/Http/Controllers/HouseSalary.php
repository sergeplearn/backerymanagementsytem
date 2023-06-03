<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HouseSalary extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $house_id = request('house_id');
        $start = request('start');
        $end = request('stop');

        $increment = DB::table('houseincrements')
            ->select('houseincrements.id', 'houseincrements.house_id', 'houseincrements.amount')
            ->where('houseincrements.house_id', $house_id)
            ->get();
        if (! $increment) {
            $increment = 0;
        }

        $salary = DB::table('advances')
            ->select('id', 'date', 'amount', 'house_id')
            ->whereBetween('date', [$start, $end])
            ->where('house_id', $house_id)
            ->get();

        $houseworkers = DB::table('houseworkers')
            ->select('id', 'salary', 'fname', 'sname')
            ->where('id', $house_id)
            ->get();

        return view('houseworker.salary', ['salary' => $salary, 'increment' => $increment, 'houseworkers' => $houseworkers]);

    }
}
