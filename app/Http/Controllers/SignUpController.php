<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function submit(ContactRequest $req) {
        $hashed = Hash::make($req->input('password'));
        $users = new Users();
        $users->first_name = $req->input('first_name');
        $users->last_name = $req->input('last_name');
        $users->email = $req->input('email');
        $users->password = $hashed;

        $users->save();

        return redirect()->route('home')->with('success', 'Регистрация прошла успешно');
    }
}
