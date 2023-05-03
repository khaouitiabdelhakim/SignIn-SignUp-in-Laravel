<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('layouts.auth.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        //auth()->login($user);
        return redirect('login');
        //return view('student.dashboard')->with('user', $user)->with('success', "Account successfully registered.");

        //return redirect('/')
    }
}
