<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getUsers() {
        $data = User::all();
        return response()->json(['rows'=>$data], 200);
    }

    public function saveUser(Request $request) {
        $User = new User();
        $User->name = $request->input('name');
        $User->email  = $request->input('email');
        $User->password = Hash::make($request->input('password'));

        $User->save();
        return response()->json(['message'=>$User], 201);
    }
}
