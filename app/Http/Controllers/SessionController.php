<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttribute = $request->validate([
            "email"=>["required","email"],
            "password"=>["required"]
        ]);

        if(!Auth::attempt($userAttribute)){
            throw ValidationException::withMessages(
                [
                    "password"=>"Invalid email or password",
                ]
            );
        }


        $request->session()->regenerate();
        return redirect("/");
    }

        public function destroy(): RedirectResponse
    {
        Auth::logout();

        return redirect("/");
    }
}
