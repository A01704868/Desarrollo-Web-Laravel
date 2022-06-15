<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('users.index', ["user" => $user]);
    }
    public function create()
    {
        echo 'create';
    }
    public function store(Request $request)
    {
        echo 'store';
    }
    public function show()
    {
        $user = User::find(auth()->user()->id);
        return view('users.index', ["user" => $user]);
    }
    public function edit($id)
    {
        echo 'edit';
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        return redirect()->route('mi-cuenta')->with('success', 'Cuenta actualizada');
    }
    public function destroy($id)
    {
        echo 'destroy';
    }
}
