<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\s;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (session()->has('LoggedUser')){
            $employee = Employee::where('id', '=', session('LoggedUser'))->first();
            $data = [
                'LoggedUserInfo' => $employee
            ];

        }

        return view('profile',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {




            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:employee',

            ]);

        $employee = Employee::where('id', '=', session('LoggedUser'))->first();

            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $query = $employee->save();
            if ($query) {

                $request->session()->flash('message', 'Task was successful!');
                $request->session()->flash('alert-class', 'Task was successful!');
                return redirect('profile');
            } else {
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');


            }

//        return view('profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
