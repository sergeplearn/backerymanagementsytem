<?php

namespace App\Http\Controllers;

use App\Http\Requests\Houseworkerval;
use App\Http\Requests\updatehouseworkers;
use App\Models\houseworker;
use Illuminate\Support\Facades\Gate;

class HouseworkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (! Gate::allows('isUser')) {

            return view('houseworker.show', ['houseworkers' => houseworker::with('user')->latest()->get()]);
        } else {
            return redirect('/error');
        }
    }

    public function store(Houseworkerval $request)
    {
        if (! Gate::allows('isUser')) {
            $request->user()->houseworkers()->create($request->validated());

            return redirect('/houseworker')->with('msgs', 'successfully updated');
        } else {
            return redirect('/error');
        }

    }

    public function show(houseworker $houseworker)
    {
        //
    }

    public function paydate($id)
    {

        //if (!Gate::allows('isUser')){
        $houseworker = $id;

        return view('houseworker.paydate', ['houseworker' => $houseworker]);
        //}else{
        //  return redirect('/error');
        //}

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(houseworker $houseworker)
    {

        if (! Gate::allows('isUser')) {
            return view('houseworker.info', ['houseworker' => $houseworker]);
        } else {
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

        return redirect('houseworker/'.$houseworker->id.'/edit')->with('msgs', 'successfully updated');

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

        return redirect('/houseworker')->with('msgs', 'successfully updated');

        //}else{
        // return redirect('/error');
        //}
    }
}
