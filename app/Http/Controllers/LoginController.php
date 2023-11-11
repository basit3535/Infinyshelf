<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.login');
    }
    public function check(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
            else {
                return back()->with('fail', 'Incorrect password');
            }
    }
    public function logout() {
        // Session::flush();
        if(Auth::check()){
            Auth::logout();
            return Redirect('/');
        }else{
            return redirect('/');
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    // public function getfieldname()
    // {
    //     $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
    //     return $filed;
    // }
}
