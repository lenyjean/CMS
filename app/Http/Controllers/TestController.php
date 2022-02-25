<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// To be able to call a desired Model file, if it is not included, Models can't be used
use App\Models\Test;

class TestController extends Controller
{
    //
    public function add(Request $request)
    {   

        // Instantiate Model Class
       $user = new Test;


       // $user is your object variable ->name = database table column name, $request->input('name') = post data
       $user->name = $request->input('name');
       $user->member_id = $request->input('member_id');
       $user->save();

    }

    public function index()
    {
        

        return Test::all();
    }
}
