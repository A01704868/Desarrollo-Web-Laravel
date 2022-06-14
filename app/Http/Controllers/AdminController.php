<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {

        return view('dashboard.index');
    }

    public function account()
    {

        return view('users.index');
    }
}
