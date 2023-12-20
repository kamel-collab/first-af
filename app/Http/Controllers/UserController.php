<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function create()  {
        
        return view('user.create');
    }
    function store(Request $request)  {
        $this->validate($request,[
            'nom'=>'required|alpha|between:5,20',
            'email'=>'required|email'
        ]);
       return 'le nom est '.$request->input('nom');
    }
}
