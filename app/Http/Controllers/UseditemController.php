<?php

namespace App\Http\Controllers;

use App\Models\useditem;
use Illuminate\Support\Facades\Gate;

class UseditemController extends Controller
{
    public function store()
    {
        if ((Gate::allows('isAdmin')) || (Gate::allows('isUser'))) {

        } else {
            return view('error.404');
        }

        $me = new useditem();
        $me->flour = request('flour');
        $me->date = request('date');
        $me->save();

        return 'save';
    }
}
