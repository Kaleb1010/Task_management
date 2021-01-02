<?php

namespace App\Http\Controllers;


use App\Models\Daily;
use App\Models\Employee;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function getTodo(Request $request)
    {
        $employee = Employee::where('id', '=', session('LoggedUser'))->first();





        $todo_list = Todo::all()->where('assigned_by','!=', $employee->name);

        $todo_list_given = Todo::all()->where('assigned_by', '=', $employee->name );

        return view('todo', compact('todo_list','todo_list_given'));


    }

    public function complete(Request $request)
    {
        $data1 = 'done';

        $data = Todo::find($request->id);
        $data->task_status = $request->$data1;
        $query = $data->save();

        if ($query) {
            return view('3d');
        } else {
            return view('todo');
        }

    }
}
