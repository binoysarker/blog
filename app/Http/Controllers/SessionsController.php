<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function create($value='')
    {
    	return view('sessions.create');
    }
    public function store()
    {
    	return redirect()->home();
    }
}
