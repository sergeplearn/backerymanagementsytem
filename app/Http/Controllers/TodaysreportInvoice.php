<?php

namespace App\Http\Controllers;

use App\Models\priceofbread;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodaysreportInvoice extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {


        $day = date('d') - 1;
	    $commanddate = date('Y/m/'.$day);
        $command = DB::table('commands')
            ->select('commands.date',
                'bread50', 'long40',
                'square40', 'long80',
                'round', 'kirico',
                'square80', 'bread200',
                'bread300', 'bread500',
                'bread1000')
            ->where('commands.date', $commanddate)
            ->get();
        if (! $command) {
            $command = 0.00;
        }
						
        $price = priceofbread::find(1);
        $date = date('Y/m/d');
        $employee = DB::table('breads')
            ->select('breads.date',
                'bread50', 'long40',
                'square40', 'long80',
                'round', 'kirico',
                'square80', 'bread200',
                'bread300', 'bread500',
                'bread1000')
            ->where('breads.date', $date)
            ->get();
        if (! $employee) {
            $employee = 0.00;
        }

        $money = DB::table('money')
            ->select('money.amount', 'money.date')
            ->where('money.date', $date)
            ->get();
        if (! $money) {
            $money = 0.00;
        }

        $expense = DB::table('expenditures')
            ->select('amount', 'date')
            ->where('date', $date)
            ->get();
        if (! $expense) {
            $expense = 0.00;
        }

        $itemsupplieds = DB::table('paysupplies')
            ->select('amount', 'date')
            ->where('date', $date)
            ->get();
        if (! $itemsupplieds) {
            $itemsupplieds = 0.00;
        }

        $housesalary = DB::table('reghousesalaries')
            ->select('salary', 'date')
            ->where('date', $date)
            ->get();
        if (! $housesalary) {
            $housesalary = 0.00;
        }

        $regemploysals = DB::table('regemploysals')
            ->select('salary', 'date')
            ->where('date', $date)
            ->get();

        $advances = DB::table('advances')
            ->select('amount', 'date')
            ->where('date', $date)
            ->get();

        $data = [
            'expense' => $expense,
            'command'=> $command,
            'itemsupplieds' => $itemsupplieds,
            'housesalary' => $housesalary,
            'regemploysals' => $regemploysals,
            'advances' => $advances,
            'money' => $money,
            'employee' => $employee,
            'price' => $price,
        ];
        Pdf::setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = Pdf::loadView('invoices.today', $data);

        return $pdf->download('Divineandfavor.pdf');

    }
}
