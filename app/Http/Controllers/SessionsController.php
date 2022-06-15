<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{

    public function create()
    {

        return view('auth.login');
    }

    public function store()
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Revisa tus credenciales',
            ]);
        } else {

            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/eventos');
            }
        }
    }

    public function destroy()
    {

        auth()->logout();

        return redirect()->to('/login');
    }
}
