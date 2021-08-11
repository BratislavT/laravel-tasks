<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    //

    public function index(){
        //return all tasks
        //$tasks = Task::all();
        $tasks = DB::table('tasks')->get();
        return view('index',['tasks'=>$tasks]);
    }
}
