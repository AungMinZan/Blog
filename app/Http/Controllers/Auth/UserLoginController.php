<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log, Validator, Auth, App\User;

class UserLoginController extends Controller
{
    /**
     * Define middleware to autheticate
     *
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show login form
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Login process
     * @param $request(Illuminate\Http\Request)
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ]);

        if ($validation->fails()) {
            return redirect()->back()
                            ->withInput($request->only('email'))
                            ->withErrors($validation);
        }

        $credentials = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password'),
        );

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()
                        ->withInput($request->only('email'))
                        ->withErrors([
                            'email' => trans('auth.failed')
                        ]);
    }

    /**
     * Logout process
     * @param $request(Illuminate\Http\Request)
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
