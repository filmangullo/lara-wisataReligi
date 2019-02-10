<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request);
        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($check) {
            $user = $this->guard()->user();

            return redirect()->to($user->redirectUrlAfterLogin());
        }
        return redirect()->back();
        
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
