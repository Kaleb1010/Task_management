<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */

    public function __construct()
    {
        $this->middleware('AlreadyLoggedIn');
    }

    public function logins()
    {
        return view('login');
    }

    public function check(Request $request)
    {

           $request->validate( [
                'email' => 'required|email|',
                'password' => 'required|alphaNum|min:4'
            ]);


        $user = Employee::where('email', '=', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password , $user->password)){
               $request->session()->put('LoggedUser',$user->id);

                return redirect('profile');
            }else{

                return back()->with('success',"bo");

            }
        } else {

            return back()->with('fail', "booooo");

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function doLogout(){
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }


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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
