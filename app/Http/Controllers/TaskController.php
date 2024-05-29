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
        'Title' => 'required',
            'Description' => 'required',
            'Priority'=> 'required',
            'Status'=> 'required',
            'Duedate'=>'required']);
            $inv['UserID'] = auth()->id();
            Task::create($inv);
            return redirect()->route('dashboard');
                        
    }
    public function editinsert(Task $task, Request $request){
        if (auth()->user()->id === $task['UserID']) {
        $incomingFields = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Priority'=> 'required',
            'Status'=> 'required',
            'Duedate'=>'required'
        ]);

        $task->update($incomingFields);
        return redirect()->route('dashboard');
    }
}
public function edit(){
    
    return (view('edit'));

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

}