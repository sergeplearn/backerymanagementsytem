<?php

namespace App\Http\Controllers;

use App\Models\rentpayment;
use Illuminate\Http\Request;

class RentpaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentpayment = rentpayment::all();
        return view('rentpayment.show',compact('rentpayment'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        rentpayment::create($request->only(['date','amount','rent_id']));
        return "save";
    }

    /**
     * Display the specified resource.
     */
    public function show(rentpayment $rentpayment)
    {
        $rentpayment = rentpayment::all();
        return view('rentpayment.show',compact('rentpayment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rentpayment $rentpayment)
    {
        return view('rentpayment.edit', [
            'rentpayment' => $rentpayment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rentpayment $rentpayment)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'amount' => 'required|max:255',
            'rent_id' => 'required|max:255',
        ]);
        $rentpayment->update($validated);
        return redirect(route('rentpayment.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rentpayment $rentpayment)
    {
        //
    }
}
