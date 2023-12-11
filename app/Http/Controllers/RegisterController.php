<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends BaseController
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return $this->redirectWithSuccess('home.index', "Account successfully registered.");
    }
}
