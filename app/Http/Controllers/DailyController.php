<?php

namespace App\Http\Controllers;

use App\Models\Daily;
use App\Models\Employee;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
           $id = Employee::where('id');
        $employee_name = Employee::all();
        return view('report',compact('employee_name'))->with(['id'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'task_title' => 'required',
            'assigned_by' => 'required',
            'assigned_to' => 'required',
            'task_status' => 'required',
            'description' => 'required'

        ]);

        $todo = new Todo();

        $todo->task_title = $request->task_title;
        $todo->assigned_by = $request->assigned_by;
        $todo->assigned_to = $request->assigned_to;
        $todo->task_status = $request->task_status;
        $todo->description = $request->description;
        $query = $todo->save();

        if ($query){
            return back()->with('success', 'TODO Created');

        }else{

            return back()->with('fail', 'Unsuccessful');

        }
    }


    public function company(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email|unique:dailies',
            'contact_name' => 'required',
            'job_description' => 'required',
            'lead' => 'required',
            'comments' => 'required'

        ]);

        $employee = Employee::where('id', '=', session('LoggedUser'))->first();


        $company = new Daily();

        $company->username = $employee->name;
        $company->department = $employee->department;
        $company->company_name = $request->company_name;
        $company->email = $request->email;
        $company->contact_name = $request->contact_name;
        $company->job_description = $request->job_description;
        $company->status = $request->lead;
        $company->comments = $request->comments;
        $query = $company->save();

        if ($query){
            return back()->with('success', 'report Created');

        }else{

            return back()->with('fail', 'Unsuccessful');

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Daily $daily
     * @return Response
     */
    public function show(Daily $daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Daily $daily
     * @return Response
     */
    public function edit(Daily $daily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Daily $daily
     * @return Response
     */
    public function update(Request $request, Daily $daily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Daily $daily
     * @return Response
     */
    public function destroy(Daily $daily)
    {
        //
    }
}
