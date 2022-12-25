<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session as FacadesSession;
use Laravel\Passport\HasApiTokens;

class UserController extends Controller
{
    public function register()
    {
        return view("user/register");
    }

    public function processRegister(request $request)
    {
        $request->validate([
            "name"             => "required",
            "email"            => "required|unique:users",
            "password"         => "required|min:6",
            "reenter_password" => "required|same:password",
        ]);

        $data = $request->all();

        $data['password'] = bcrypt($data['password']);
        $data['level'] = 0; // Member

        // dump($data);

        $user = User::create($data);

        // dd($user);

        // return $this->registerSuccess($user->id);

        return redirect('/user/login');

    }

    public function login()
    {
        return view("user/login");
    }

    public function processLogin(Request $request )
    {
        $request->validate([
            "name"             => "required",
            "password"         => "required|min:6",
        ]);

        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('user/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }
    
    public function logout()
    {
        FacadesSession::flush();
        Auth::logout();
        return redirect()->route('login');
    }

}