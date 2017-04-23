<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/';
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function index(){
        return view('auth.login');
    }
    /*public function login(){
        if(! auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
            'message' => 'please check your credentials and try again'
        ]);
        }
        return redirect()->home();
    }*/
    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
