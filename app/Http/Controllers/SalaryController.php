<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Gate;
class SalaryController extends Controller
{
   

    
    public function index(){
        $emp = request('salary');
        $start = request('start');
        $end = request('stop');
        $money = DB::table('money') 
        ->select('emply_id','amount','id')
        ->whereBetween('date', [$start, $end])
        ->where('emply_id',$emp)
       ->get();


       $employees = DB::table('employees')->where('id',$emp)->get();
       $salary = DB::table('breads')->where('breads.emply_id',$emp)->whereBetween('breads.date', [$start, $end])->get();
       return view('test.show',['salary'=>$salary,'money'=>$money,'employees'=>$employees]);
       
      }


      public function salaryrecord($id){

        $listsal = DB::table('reghousesalaries') 
        ->select('salary','name','date','created_at','house_id','id')
        ->where('house_id',$id)
       ->get();
    
       return view('houseworker.listsal',compact('listsal'));
      }

    //house worker side of salary
    public function houseworkersal(){
        $house_id = request('house_id');
        $start = request('start');
        $end = request('stop'); 
        
        
        $increment = DB::table('houseincrements') 
        ->select('houseincrements.id','houseincrements.house_id','houseincrements.amount')
        ->where('houseincrements.house_id',$house_id)
       ->get();
         if(!$increment){
            $increment = 0;
         }

         
        $salary = DB::table('advances') 
       
        ->select('id','date','amount','house_id')
        
        ->whereBetween('date', [$start, $end])
        ->where('house_id',$house_id)

       ->get();


       $houseworkers = DB::table('houseworkers') 
       ->select('id','salary','fname','sname')
       ->where('id',$house_id)

       ->get();
      return view('houseworker.salary',['salary'=>$salary,'increment'=> $increment,'houseworkers'=>$houseworkers ]);
       
       
    }
}
