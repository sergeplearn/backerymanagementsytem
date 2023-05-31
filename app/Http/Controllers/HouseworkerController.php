<?php

namespace App\Http\Controllers;

use App\Models\houseworker;
use Illuminate\Http\Request;
use App\Http\Requests\Houseworkerval;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\updatehouseworkers;
class HouseworkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('isUser')){
           
            return view('houseworker.show',['houseworkers'=> houseworker::with('user')->latest()->get(),]);
        }else{
            return redirect('/error');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Houseworkerval $request)
    {
        if (!Gate::allows('isUser')){
            $request->user()->houseworkers()->create($request->validated());
                return redirect('/houseworker')->with('msgs','successfully updated');
            }else{
                return redirect('/error');
            }
            
    }

    /**
     * Display the specified resource.
     */
    public function show(houseworker $houseworker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(houseworker $houseworker)
    {

        if (!Gate::allows('isUser')){
    return view('houseworker.info',['houseworker'=>$houseworker]);
    }else{
        return redirect('/error');
    }
         
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updatehouseworkers $request, houseworker $houseworker)
    {
         // if(!Gate::allows('isUser')){
            $houseworker->update($request->validated());
      
            return redirect('houseworker/'. $houseworker->id .'/edit')->with('msgs','successfully updated');
         
               //}else{
                 //  return redirect('/error');
               //}
               
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(houseworker $houseworker)
    {
          //if((Gate::denies('isUser'))&&(Gate::denies('isAdmin'))){

$houseworker->delete();
return redirect('/houseworker')->with('msgs','successfully updated');

//}else{
   // return redirect('/error');
//}
    }
}
