<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;


    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function create()
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        // $roles = Role::where('id', '<>', 1)->get();
        // return view('auth.register', compact('roles'));
        return view('auth.register',);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'image' => 'required|mimes:png,jpg,'
        ]);

        if ($request->has('image')) {
            $ext  = $request->image->getClientOriginalExtension();
            $name = time() . "." . $ext;
            $request->image->move(public_path('uploads'), $name);
        }
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'thumbnail' => $name ? $name : 'dummy.png',
        ]);
    // dd($user);
        if(Auth::check()){
            return redirect('/dashboard')->with('success', 'Account has been created!!!');

        }else{
            return redirect('/')->with('success', 'Account has been created!!!');
        }
    }
    public function show(User $user)
    {
        //
    }
}
