<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    protected function validateRequest(Request $request, array $rules)
    {
        $request->validate($rules);
    }

    protected function getUserId()
    {
        return Auth::id();
    }

    protected function redirectWithSuccess($route, $message)
    {
        return redirect()->route($route)->with('success', $message);
    }
}
