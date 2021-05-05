<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class DeletetaskController extends Controller

{
    public function delete($class_id){
        $task = Task::find($class_id);
        $task->delete();
        return view('confirmation');
    }
}

