<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bread;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateValidationrequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
class BreadController extends Controller
{
   

    public function show($id){
        $employ_id = $id;
        $employ_code = request('employ_code');
        
           $money = DB::table('money') 
           ->select('emply_id','amount')
         
           ->where('money.emply_id',$id)
           ->latest()
          ->get();
         
           $breadtaken = DB::table('breads') 
           ->select('id','emply_id','updated_at','created_at','ref_code','bread50','long40','square40','long80','round','kirico','square80','bread200','bread300','bread500','bread1000')
           ->where('emply_id',$id)
           ->latest()
          ->get();
   
          $employees = DB::table('employees') 
           ->select('employees.pecentage','id','fname','sname')
           ->where('id',$id)
           ->latest()
          ->get();
   
          $price = DB::table('priceofbreads') 
          ->select('bread50','bread100','bread200','bread300','bread500','bread1000','id')
        
          ->where('priceofbreads.id',1)
          ->latest()
         ->get();
         
         
          
          return view('breads.onemanbread',['breadtaken'=>$breadtaken,'money'=>$money,'employees'=>$employees,'employ_id'=>$employ_id,'employ_code'=>$employ_code,'price'=>$price]);
       }
   
   
   

    

    public function storeuser(Request $request){
        $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'role'=> ['required', 'string', 'max:255'],
       ]);
    
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),

        ]);
       return redirect('/home');
        
    }
    public function createuser(){
        return view('login.create');
    }



    public function store(CreateValidationrequest $request){
        
       // if ((Gate::allows('isAdmin')) || (Gate::allows('isUser')) ) {
            
             bread::create( $request->validated());
          
        return back();
        //}else{
          //  return redirect('/error');
        //}
        
        

    }

    //public function show():View {
     
      //  $bread = bread::all();
       // return view('test.test',compact('bread'));

   // }

    public function edit(bread $bread) {
        
       
       return view('breads.edit',compact('bread'));

    }

    public function update(CreateValidationrequest $request,bread $bread) {
        
          
        //if (Gate::allows('isAdmin')) {
           
       
       $bread->update($request->validated());
    
        return redirect('bread/'. $bread->emply_id)->with('msgs','successfully updated');
//        }else{
  //          return redirect('/error');
    //    }
        

    }

   


   
}







