<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){

        $reqFields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt(['email'=>$reqFields['email'], 'password'=> $reqFields['password']])){
            $request->session()->regenerate();
            return redirect("/admin")->with('success', 'Logged in successfullt');
        }

        return redirect("/admin/login")->with('error', 'Invalid Credentials');
    }
}
