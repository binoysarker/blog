<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create($value='')
    {
    	return view('registration.create');
    }
    public function store($value='')
    {
    	$this->validate(request(),[
    		'name'		=>	'required',
    		'email'		=>	'required|email',
    		'password'	=>	'required|confirmed'
    		]);

    	// create user
    	$user = User::create(request(['name','email','password']));

    	// let the user login
    	auth()->login($user);

    	return redirect()->home();
    }

    public function distroy($value='')
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
