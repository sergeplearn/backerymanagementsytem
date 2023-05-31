<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = message::all();
        return view('message.index',['message'=>$message]);
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
    { $validated = $request->validate([
        'message'=>'required',
    ]);
    message::create($validated);
    return redirect(route('message.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        return $message;
        
        //return view('message.edit',['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, message $message)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
 
        $message->update($validated);
 
        return redirect(route('message.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(message $message)
    {
        //
    }
}
