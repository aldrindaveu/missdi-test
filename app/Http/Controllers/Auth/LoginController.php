<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username(){
        return 'username';
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
            } 
            else if(auth()->user()->accountType == '2') {
                return redirect('CUserprofile');
            } 
            else if(auth()->user()->accountType == '3') {
                return redirect('userprofile');
            }
            
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
        
    }

}
