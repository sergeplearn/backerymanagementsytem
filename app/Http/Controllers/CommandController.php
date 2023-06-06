<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommandValid;
use App\Models\command;
use App\Models\employee;
use App\Models\priceofbread;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CommandController extends Controller
{
    public function show($id)
    {
        $employ_id = $id;
        $price = priceofbread::find(1);
        $command = employee::find($id)->commands;

        return view('command.show', ['command' => $command, 'employ_id' => $employ_id, 'price' => $price]);
    }

   public function store(CommandValid $request)
   {

       if ((Gate::allows('isAdmin')) || (Gate::allows('isUser'))) {
           $command = command::create($request->validated());

           return redirect('command/'.$command->emply_id)->with('msgs', 'successfully updated');
       } else {
           return redirect('/error');
       }
   }

   public function date()
   {

       $datenow = date('Y/m/d');

       $command = DB::table('commands')->whereTime('date', '=', $datenow)->get();

       return view('command.today', compact('command'));
   }

    public function edit(command $command)
    {

        return view('command.edite', compact('command'));
    }

    public function update(CommandValid $request, command $command)
    {
        if (! Gate::allows('isUser')) {
            $command->update($request->validated());

            return redirect('command/'.$command->emply_id)->with('msgs', 'successfully updated');
        } else {
            return redirect('/error');
        }
    }
}
