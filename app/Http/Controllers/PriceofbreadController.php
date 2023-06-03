<?php

namespace App\Http\Controllers;

use App\Models\priceofbread;
use Illuminate\Http\Request;

class PriceofbreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('price.index', ['priceofbreads' => priceofbread::with('user')->latest()->get()]);

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
    public function store(Request $request)
    {
        $validation = $request->validate([
            'bread50' => 'required',
            'bread100' => 'required',
            'bread200' => 'required',
            'bread300' => 'required',
            'bread500' => 'required',
            'bread1000' => 'required',
        ]);
        $request->user()->priceofbreads()->create($validation);

        return 'save';
    }

    /**
     * Display the specified resource.
     */
    public function show(priceofbread $priceofbread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(priceofbread $priceofbread)
    {
        dd($priceofbread);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, priceofbread $priceofbread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(priceofbread $priceofbread)
    {
        //
    }
}
