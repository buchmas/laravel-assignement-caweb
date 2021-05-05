<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    { 
        return view('index', ['tasks' => \App\Models\Task::all()
        ]);
    }

    public function ordinate()
    {
        $tasks = DB::table('tasks')->orderBy('title', 'asc')->get();
        return view('index2', ['tasks' => $tasks]);
    }
}
