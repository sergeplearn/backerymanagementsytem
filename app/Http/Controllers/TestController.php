<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    
   






    public function salarylist($id){
        $list = DB::table('regemploysals') 
        ->select('empy_id','salary','id','name','date')
      
        ->where('empy_id',$id)
        ->latest()
       ->get();
         return view('employee.sallist',compact('list'));
    }


    
    
}
