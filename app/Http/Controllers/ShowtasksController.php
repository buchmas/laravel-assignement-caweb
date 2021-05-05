<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class ShowtasksController extends Controller

{
    public function show($class_id)
    {
        return view('task', [
          'task' => Task::find($class_id),
       ]);

    }
}