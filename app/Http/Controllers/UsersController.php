<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function show(){
        $users = User::paginate(10);
        return view('show', [
            'users' => $users
        ]);
    }
}
