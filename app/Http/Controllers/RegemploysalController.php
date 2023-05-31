<?php

namespace App\Http\Controllers;
use App\Models\regemploysal;
use Illuminate\Http\Request;
use App\Http\Requests\registeremploysalrequest;

class RegemploysalController extends Controller
{
    public function store(registeremploysalrequest $request){
        $regemploysal = regemploysal::create($request->validated());
        
    return redirect('/employees/salarylist/'.$regemploysal->empy_id)->with('msgs','successfully updated');;
    
    }

    


    public function destroy($id){
        $regemploysal = regemploysal::find($id);
        $regemploysal->delete();
        return redirect('/report/employ')->with('msgs','successfully updated');
    }
    

}
