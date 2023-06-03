<?php

namespace App\Http\Controllers;

use App\Models\housetype;
use Illuminate\Http\Request;

class HousetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('houserent.house.create', [
            'housetypes' => housetype::with('user')->latest()->get(),
        ]);
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
        $validated = $request->validate([
            'house_no' => 'required',
            'price' => 'required',
            'description' => 'required',
            'catigory' => 'required',
        ]);
        $request->user()->housetypes()->create($validated);

        return 'successful';
    }

    /**
     * Display the specified resource.
     */
    public function show(housetype $housetype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(housetype $housetype)
    {

        return view('houserent.house.edit', ['housetype' => $housetype]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, housetype $housetype)
    {
        $validated = $request->validate([
            'house_no' => 'required',
            'price' => 'required',
            'description' => 'required',
            'catigory' => 'required',
        ]);
        $housetype->update($validated);

        return redirect(route('housetype.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(housetype $housetype)
    {
        $housetype->delete();

        return redirect(route('housetype.index'));
    }
}
