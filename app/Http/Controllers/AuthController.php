<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Laravel\Fortify\Contracts\RegisterResponse;

class AuthController extends Controller
{
    public function dashboard(): View
    {
        return view('auth.dashboard');
    }

    public function register(Request $request, CreateNewUser $creator, RegisterResponse $response)
    {
        $creator->create($request->all());

        return $response;
    }
}
