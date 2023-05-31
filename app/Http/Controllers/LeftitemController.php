<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class LeftitemController extends Controller
{
    

    public function show(){
    $useditems = DB::table('useditems') 
        ->select('useditems.flour')
        
       ->get();


        $salary = DB::table('itemsupplieds') 
        ->select('itemsupplieds.item','itemsupplieds.number','itemsupplieds.date')
        ->where('itemsupplieds.item',"flour")
       
       ->get();
       return view('itemsleft.show',compact('salary'),compact('useditems'));

    }



}
