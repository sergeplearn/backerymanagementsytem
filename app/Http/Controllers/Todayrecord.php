<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Todayrecord extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       
        $date = date('Y/m/d');
        $employee = DB::table('breads')
            ->select('breads.id AS breads', 'breads.emply_id', 'breads.date', 'breads.date', 'bread50', 'long40', 'square40', 'long80', 'round', 'kirico', 'square80', 'bread200', 'bread300', 'bread500', 'bread1000')
            ->where('breads.date', $date)
            ->get();

        $money = DB::table('money')
            ->select('money.amount', 'money.date')
            ->where('money.date', $date)
            ->get();

        $expense = DB::table('expenditures')
            ->select('amount', 'date')
            ->where('date', $date)
            ->get();

        $itemsupplieds = DB::table('paysupplies')
            ->select('amount', 'date')
            ->where('date', $date)
            ->get();
        if (! $itemsupplieds) {
            $itemsupplieds = 0;
        }

        $housesalary = DB::table('reghousesalaries')
            ->select('salary', 'date')
            ->where('date', $date)
            ->get();
        if (! $housesalary) {
            $housesalary = 0;
        }

        $regemploysals = DB::table('regemploysals')
            ->select('salary', 'date')
            ->where('date', $date)
            ->get();
            return view('invoices.todaysrecord',['expense'=>$expense]);
    }
    
}
