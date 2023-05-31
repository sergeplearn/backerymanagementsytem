<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\command;
use App\Http\Requests\CommandValid;
use Illuminate\Support\Facades\Gate;


class CommandController extends Controller
{
   
    public function show($id){
        $employ_id = $id;
      
        $command = DB::table('commands') 
       
        ->join('employees','employees.id','=','commands.emply_id' )
        ->where('employees.id',$id)
        ->select('commands.id AS command','commands.emply_id','commands.created_at','employees.id AS employ','bread50','long40','square40','long80','round','kirico','square80','bread200','bread300','bread500','bread1000')
        ->latest()
        ->get();
       return view('command.show',['command'=>$command,'employ_id'=>$employ_id]);
     }



   public function store(CommandValid $request){

   
   if ((Gate::allows('isAdmin')) || (Gate::allows('isUser')) ) {
        $command = command::create($request->validated());
        return redirect('command/'. $command->emply_id)->with('msgs','successfully updated');
   }else{
    return redirect('/error');
   }
   }


   public function date(){

    $datenow =  date("Y/m/d");
  
    $command = DB::table('commands')->where('date',$datenow)->get();
     return view('command.today',compact('command'));
}

    public function edit(command $command){
       
        return view('command.edite',compact('command'));
    }



    public function update(CommandValid $request,command $command){
        if (!Gate::allows('isUser'))  {
          $command->update($request->validated());
        return redirect('command/'.$command->emply_id)->with('msgs','successfully updated');
        }else {
            return redirect('/error');
        }
    }


   
}
