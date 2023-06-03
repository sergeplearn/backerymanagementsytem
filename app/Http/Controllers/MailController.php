<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\sendmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('report.todayreport');
    }

    public function send()
    {
        $user = Auth::user();
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

        Mail::to('shemlonsergeyuka14@gmail.com', $user->name)->send(new sendmail($employee, $money, $expense, $itemsupplieds, $housesalary, $regemploysals));

        return redirect('/employees/show')->with('msgs', 'successfully updated');
    }

    public function recieved()
    {
        $details['email'] = 'your_email@gmail.com';

        dispatch(new SendEmailJob($details));
        dd('done');
    }
}
