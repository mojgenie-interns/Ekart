<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function doLogin()
    {
        $input = request()->only('username', 'password');

        // Attempt to authenticate
        if (Auth::guard('admin')->attempt([
            'username' => $input['username'],
            'password' => $input['password']
        ])) {
            // Redirect or return success response
            return redirect()->route('admin.dashboard'); //->route('adminlogin')->with('success', 'Login Successfully');
        } else {
            // Redirect back with error message
            return redirect()->back()->withErrors([
                'login_error' => 'Login Error: Invalid credentials',
            ]);
        }
    }
}
