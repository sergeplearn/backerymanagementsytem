<?php

namespace App\Http\Controllers;
use App\Models\houseworkers;
use App\Http\Requests\Houseworkerval;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\updatehouseworkers;
class HouseworkersController extends Controller
{
    
    

    
    public function paydate(houseworkers $houseworkers){
    if (!Gate::allows('isUser')){
        return view('houseworker.paydate',['houseworkers'=>$houseworkers]);
    }else{
        return redirect('/error');
    }
    
    }





}
