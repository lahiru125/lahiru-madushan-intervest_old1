<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use App\Models\User;

class GuideController extends Controller
{
    public function getGuides() {
        $data = Guide::where('deleted', '=', '0')->join('users', 'guides.added_by', '=', 'users.id')->orderBy('guides.id', 'desc')->get();
        return response()->json(['guides'=>$data], 200);
    }

    public function saveGuide(Request $request) {
        $userObj = User::where('email', '=', $request->input('added_by'))->get();
        $user = $userObj[0]->id;

        $guide = new Guide();
        if($request->input('link')){
            $link = $request->input('link');
        }else{
            $link = 'N/A';
        }
        $guide->heading = $request->input('heading');
        $guide->description = $request->input('description');
        $guide->link = $link;
        $guide->date = date('Y-m-d');
        $guide->deleted = 0;
        $guide->added_by = $user;

        $guide->save();
        return response()->json(['message'=>$guide], 201);
    }
    
}
