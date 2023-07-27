<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class WelcomeController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }

    public function showUsers(){

        $users = User::with('roles')->get();

        return view('/auth/register', ['users'=> $users]);
    }

    public function editUser(User $user){
        
        $roles = Role::pluck('name', 'id');

        return view('edit_user', compact('user', 'roles'));
    
    }

    public function destroyUser(User $user){

        $user->delete();

        return redirect()->route('register')->with('success', 'El usuario fue eliminado exitosamente!');
    }

    public function updateUser(Request $request, User $user){

        $request->validate([
            'name'=> 'required|string|max:255',
            'rol'=> 'required|string',
        ]);

        $user->name = $request->input('name');
        $user->syncRoles($request->input('role'));
        $user->save();

        return redirect()->route('/register')->with('success', 'El usuario fue actualizado exitosamente!');
    }
}
