<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Auth;

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

    
    protected $redirectTo = '/home';

    protected function authenticated(Request $request, $user){

            if (Auth::user()->role =='admin') {
                return redirect('/admin');
            }

            elseif (Auth::user()->role =='user') {
                return redirect('/user');
            }

            elseif (Auth::user()->role =='partner') {
                return redirect('/partners');
            }

            else{
                abort(403);
            }
    }

   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       

       

        $this->middleware('guest')->except('logout');





    }

     public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}