<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function createe(){
        return (view('create'));
    }

    public function createtask(Request $request){
       $inv=$request->validate([
        'Name' => 'required',
        'Travels and Name' => 'required',
        'Account Details'=>'required',
        'Bus name'=> 'required',
        'Bus Number'=> 'required',
        'Bus Seat Counts'=>'required',
        'Date of Birth'=>'required',
        'City'=>'required']);
            $inv['UserID'] = auth()->id();
            Task::create($inv);
            return redirect()->route('dashboard');
                        
    }
    public function editinsert(Task $task, Request $request){
        if (auth()->user()->id === $task['UserID']) {
        $incomingFields = $request->validate([
            'Bus name' => 'required',
            'Travels and Name' => 'required',
            'Account Details'=>'required',
            'Bus Name'=> 'required',
            'Bus Number'=> 'required',
            'Bus Seat Counts'=>'required',
            'Date of Birth'=>'requried',
            'City'=>'required'
        ]);

        $task->update($incomingFields);
        return redirect()->route('dashboard');
    }
}

public function boardinsert(Task $task, Request $request){
    if (auth()->user()->id === $task['UserID']) {
    $incomingFields = $request->validate([
        'City'=>'required',
        'Starting Point'=>'required',
        'Ending Point'=>'required',
        'Starting Time'=>'required',
        'Ending Time'=>'required',
        'Starting Date'=>'required',
        'Ending Date'=>'required',



    ]);

    $task->update($incomingFields);
    return redirect()->route('dashboard');

}
}


public function edit(){
    
    return (view('edit'));

}
public function board(){
    
    return (view('board'));

}
public function deletetask(Task $task) {
    if (auth()->user()->id === $task['UserID']) {
        $task->delete();
    }
    return(redirect('/dashboard'));
}
public function tedit(Task $task){
    $task=Task::where('id',$task->id)->first();
    return view('edit',['task'=>$task]);
   
}
public function tboard(Task $task){
    $task=Task::where('id',$task->id)->first();
    return view('edit',['task'=>$task]);
   
}

}
