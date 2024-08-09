<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:16'],
        ]);
        $user = new User();
        $user->name = request('name');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        auth()->login($user);
        return redirect('/');
    }
}
