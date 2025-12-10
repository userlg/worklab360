<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function dashboard(): View
    {
        return view('auth.dashboard');
    }
}
