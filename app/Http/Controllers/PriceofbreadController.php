<?php

namespace App\Http\Controllers;

use App\Models\priceofbread;
use Illuminate\Http\Request;

class PriceofbreadController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(priceofbread $priceofbread)
    {

        return view('price.edit', ['priceofbread' => $priceofbread]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, priceofbread $priceofbread)
    {
        $validation = $request->validate([
            'bread50' => 'required',
            'bread100' => 'required',
            'bread200' => 'required',
            'bread300' => 'required',
            'bread500' => 'required',
            'bread1000' => 'required',
        ]);
        $priceofbread->update($validation);

        return redirect('/priceofbread/1/edit')->with('msgs', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(priceofbread $priceofbread)
    {
        //
    }
}
