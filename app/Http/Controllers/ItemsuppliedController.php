<?php

namespace App\Http\Controllers;
use App\Models\supply;

use App\Models\itemsupplied;
use App\Http\Requests\itemsu;

use Illuminate\Support\Facades\Gate;
class ItemsuppliedController extends Controller
{
  
  public function show($id){

    $supply_id = $id;
   
    $supplymoney = supply::find($id)->paysupplie;
  
    $items = supply::find($id)->itemsupplied;
  
return view('supplieditem.show',['items'=> $items,'supplymoney'=>$supplymoney,'supply_id'=>$supply_id]);

}


    public function store(itemsu $request){
      if ((Gate::allows('isAdmin')) || (Gate::allows('isUser')) || (Gate::allows('isdeveloper')) ) {

        $itemsupplied = itemsupplied::create($request->validated());
        return redirect('itemsupplied/'.$itemsupplied->ref_supply)->with('msgs','successfully updated');
      }else{
          return view('error.404');
      }
      
        
      }

      public function edit(itemsupplied $itemsupplied){
      
      
        return view('supplieditem.edit',['itemsupplied'=>$itemsupplied]);
      }

      public function update(itemsu $request, itemsupplied $itemsupplied){
        if (!Gate::allows('isUser')) {

          $itemsupplied->update($request->validated());
          return redirect('itemsupplied/'.$itemsupplied->ref_supply)->with('msgs','successfully updated');
  
        }else{
          return redirect('/error');
        }
        
       
      }

      public function destroy(itemsupplied $itemsupplied){
        //if((Gate::denies('isUser'))&&(Gate::denies('isAdmin'))){
         
      
          $itemsupplied->delete();
        
          return redirect('itemsupplied/'.$itemsupplied->ref_supply)->with('msgs','successfully updated');
  
        //}else{
          //return redirect('/error');
        //}
        
       
      }
}
