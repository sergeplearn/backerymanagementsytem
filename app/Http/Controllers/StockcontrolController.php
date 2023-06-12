<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorestockcontrolRequest;
use App\Http\Requests\UpdatestockcontrolRequest;
use App\Models\stockcontrol;

class StockcontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('stock.index');
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
    public function store(StorestockcontrolRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(stockcontrol $stockcontrol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stockcontrol $stockcontrol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestockcontrolRequest $request, stockcontrol $stockcontrol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stockcontrol $stockcontrol)
    {
        //
    }
}
