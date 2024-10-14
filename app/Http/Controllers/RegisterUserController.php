<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;


class RegisterUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $userAttribute = $request->validate([
        "name"=> ["required","min:3"],
        "email"=>['required', 'email','unique:users, email'],
        "password"=>["required","confirmed",Password::min(6)]
        ]);

        $employerAttribute=$request->validate([
            "employer"=>["required", "min:3"],
            "logo"=>["required", File::types(['png','jpg','webp'])]
        ]);

        $user = User::create($userAttribute);

        $logoPath = $request->logo->store('logos');
        $user->employer()->create([
            "name"=> $employerAttribute['employer'],
            "logo"=> $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');

    }


   
}
