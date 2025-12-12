<?php

namespace App\Responses;

use App\Contracts\UserRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    protected UserRepositoryInterface $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function toResponse($request): RedirectResponse
    {
        $user = Auth::user();

        if (! $this->userRepo->hasRoles($user)) {
            return redirect()
                ->route('login')
                ->with('error', 'An error occurred');
        }

        return redirect()->route('dashboard');
    }
}
