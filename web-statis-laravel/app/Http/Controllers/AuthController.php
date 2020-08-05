<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        // dd($request->all());
        $firstName = $request["fname"];
        $lastName = $request["lname"];
        return view('welcome')
            ->with('fname', $firstName)
            ->with('lname', $lastName);
    }
}
