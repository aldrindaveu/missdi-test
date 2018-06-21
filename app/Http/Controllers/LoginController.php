<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{


	public function checkLogin(Request $request)
	{
		$this->validate($request, [
			'username'		=>	'required',
			'password'		=>	'required'
		]);

		$user_data = array(
			'username'		=>	$request->get('username'),
			'password'		=>	$request->get('password'),
		);

		if(Auth::attempt($user_data))
		{
			return redirect('successLogin');
		}
		else
		{
			return back()->with('error','Wrong Login Details');
		}
	}

	public function checkUserRole(Request $request) {

        $this->validate($request, [
            'username'      =>  'required',
            'password'      =>  'required'
        ]);

        $user_data = array(
            'username'      =>  $request->get('username'),
            'password'      =>  $request->get('password'),
        );

        if(Auth::attempt($user_data))
        {
            if(auth()->user()->accountType == '1') {
                return redirect('dashboard');
            } else if(auth()->user()->accountType == '2') {
                return redirect('CUserprofile');
            } else if(auth()->user()->accountType == '3') {
                return redirect('userprofile');
            }
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
        
    }

	public function successLogin()
	{
		return view('pages.adminSide.dashboard');
	}

	public function logout()
	{
		Auth::logout();
		return view('/');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
