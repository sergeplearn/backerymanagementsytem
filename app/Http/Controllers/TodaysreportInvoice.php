<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TodaysreportInvoice extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
//$data = [
  //  'name' => $name,
//];
        $pdf = Pdf::loadView('invoices.today');
        return $pdf->download('Divineandfavor.pdf');
   
    }
}
