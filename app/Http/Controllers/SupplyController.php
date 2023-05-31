<?php

namespace App\Http\Controllers;
use App\Models\supply;

use App\Http\Requests\suppyinfoval;
use Illuminate\Support\Facades\Gate;
class SupplyController extends Controller
{
   
   
   
    public function store(suppyinfoval $request){
       
        if (!Gate::allows('isUser')){
            supply::create(  $request->validated());
           
            return redirect('/supply')->with('msgs','successfully updated');
        }else{
            return redirect('/error');
        }
        
      
    }

    public function index(){
        $supply = supply::all();
        return view('supply.show',compact('supply'));
    }

    


    public function edit(supply $supply){
        if (!Gate::allows('isUser')){
         
        return view('supply.info',['supply'=>$supply]);
    }else{
        return view('error.404');
    }
    }


    

    public function update(suppyinfoval $request,supply $supply){
        
        if (!Gate::allows('isUser')) {
            $supply->update($request->validated());
    
            return redirect('/supply')->with('msgs','successfully updated');  
    
  
        }else{
            return redirect('/error');
        }
        
       
    }

    public function destroy(supply $supply){
        //if((Gate::denies('isUser'))&&(Gate::denies('isAdmin'))){
    
    $supply->delete();
    return redirect('/supply')->with('msgs','successfully updated');  
    
   // }else{
    //    return redirect('/error');
    //}
        
    }
}
