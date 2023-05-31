<?php

namespace App\Http\Controllers;
use App\Models\reghousesalary;
use App\Http\Requests\registerhousesalrequest;
use Illuminate\Support\Facades\Gate;

class ReghousesalaryController extends Controller
{
    
    
    public function store(registerhousesalrequest $request){
        if(!Gate::allows('isUser')){
        
            $reghousesalary = reghousesalary::create($request->validated());
              
     
     return redirect('/houseworkers/salaryrecord/'. $reghousesalary->house_id)->with('msgs','successfully updated');
    }else{
        return redirect('/error');
    }
    }

   


    public function destroy($id){
        $reghousesalary = reghousesalary::find($id);
        $reghousesalary->delete();
        return redirect('/salaryregistration/show')->with('msgs','successfully updated');

    }
    
}
