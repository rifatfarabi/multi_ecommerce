<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(){
        if(auth()->user()->role == "admin"){
            return redirect()->route("dasboard.admin");
        }elseif(auth()->user()->role == "customer"){
            return redirect()->route('dashboard.customer');
        }else{
            return redirect()->route('welcome');
        }
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            "email" => ["required","email"],
            "password" => ["required"],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        }

        // if(!auth()->attempt($request->only(['email','password']), $request->remember)) {
        //     return back()->with("failed","invalid details");
        // }

        if (Auth::viaRemember()) {
            //
        }

        return redirect()->route('dashboard');
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }

}
