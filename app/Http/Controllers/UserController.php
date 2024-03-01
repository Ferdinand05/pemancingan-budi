<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {

        return view('users.index', ['users' => User::get()]);
    }

    public function edit($username)
    {
        return view('users.edit', ['user' => User::whereUsername($username)->first(), 'roles' => Role::get()]);
    }

    public function update(Request $request, User $users, $username)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'role' => 'required'
        ]);

        $users = $users->where('username', $username)->first();
        $users->update([
            'name' => $request->name,
        ]);
        $users->syncRoles(intval($request->role));

        return back()->with('success', 'Data User updated successfully!');
    }

    public function destroy($username)
    {

        if (Auth::user()->username == $username) {
            return back()->with('danger', 'You can not delete yourself!');
        } else {
            User::whereUsername($username)->delete();
            return back()->with('success', 'Data User has been Deleted!');
        }
    }
}
