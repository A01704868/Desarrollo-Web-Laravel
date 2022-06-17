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

    public function showProfile()
    {
        $user = User::find(auth()->user()->id);
        return view('users.profile', ["user" => $user]);
    }
    public function showAccount()
    {
        $user = User::find(auth()->user()->id);
        return view('users.index', ["user" => $user]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.userEdit', ["user" => $user]);
    }
    public function showAll()
    {
        $users = User::where('role', 'admin')->get();
        return view('dashboard.users', ["usuarios" => $users]);
    }
    public function addAdmin()
    {
        return view('dashboard.userAdd');
    }
    public function postAdmin(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->role = 'admin';
        $user->save();
        return redirect()->route('dashboard-users')->with('success', 'Usuario agregado correctamente');
    }
    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('dashboard-users')->with('success', 'Usuario editado');
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('mi-cuenta')->with('success', 'Cuenta eliminada');
    }
}
