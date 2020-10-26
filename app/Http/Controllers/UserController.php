<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index() {
        $users = Users::all();
        return($users->toJson());
    }

    public function show($id) {
        $res = Users::find($id);
        return ($res->toJson());
    }

    public function store(Request $req)
	{
        $params = $req->json()->all();

        if(count($params)) {
            $user = new Users;
            $user->first_name=$req->first_name;
            $user->last_name=$req->last_name;
            $user->email=$req->email;
            $user->password = md5($req->password);
            $user->save();
            return $user->toJson();
        } else {
            return('{"error" : "invalid params"}');
        }
	}

    public function update(Request $req,$id) {
        $user = Users::find($id);
        $user->last_name=$req->last_name;
        $user->first_name=$req->first_name;
        $user->email=$req->email;
        $user->password=md5($req->password);
        $user->save();
        return ($user->toJson());
        // $user=Users::find(6);
    }
    public function destroy($id)
    {
        $user = Users::find($id);
        if ($user) {
            $user->delete();
            return ($user->toJson());
        } 
        return('{"error": "not found"}');
    }
}
