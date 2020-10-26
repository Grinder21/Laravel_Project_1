<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccessRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class SignInController extends Controller
{
    public function submit(AccessRequest $req) {
        $user = Users::where('email', $req->input('email'))->first();
        $pass = Users::where('password', $req->input('password'))->first();
        if ($user && $pass) {
            return redirect()->route('home')->with('success', 'Авторизация прошла успешно');
        } else {
            return redirect()->route('sign_in')->with('SignInError', 'Вы не смогли авторизоваться');
        } 
    }   
}
