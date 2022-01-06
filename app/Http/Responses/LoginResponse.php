<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        $user = Auth::user();

        if ($user->isAdmin() || $user->isWriter() || $user->isSuperAdmin()) {
            return redirect()->route('admin.index');
        }

        return redirect()->intended(config('fortify.home'));
    }
}
