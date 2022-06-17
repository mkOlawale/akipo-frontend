<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //Regiter route start from here
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'fullName' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
       User::create([
           'fullName' => $request->fullName,
           'email' => $request->email,
           'password' => Hash::make($request->password)
        //    'password' => Hash::make($request->passord)
       ]);
       return redirect('/');
    //    auth()->attempt($request->only('email', 'password'));
    }
}
