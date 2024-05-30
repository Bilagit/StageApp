<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(){
        return view('auth.signup');
    }
    public function signin(){
        return view('auth.signin');
    }
    public function profil()
    {
        $user = Auth::user();
        return view('auth.profil', ['user' => $user]);
    }
    public function dosignup(SignUpRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'firstname' => $request->firstname,
            'ecole' => $request->ecole,
            'number' => $request->number,
            'class' => $request->class,
            'domaine' => $request->domaine,
            'niveau' => $request->niveau,
            'password' => Hash::make($request->password)
        ]);
        if ($user) {
            return to_route('index');
        }
        return to_route('auth.signup');

    }
    public function dosignin(SignInRequest $request){
        $credentials = $request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }
        return to_route('auth.signin')->withErrors([
            'email' => "Email ou mot de passe invalide"
        ])->onlyInput('email');
    }
}
