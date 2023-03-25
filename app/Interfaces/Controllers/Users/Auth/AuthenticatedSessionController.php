<?php

namespace App\Interfaces\Controllers\Users\Auth;

use App\Domains\Users\Enums\AuthStatics;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     * @throws ValidationException
     */
    public function store(LoginRequest $request): Response
    {
        $request->authenticate();

        if(!$request->wantsJson()){
            $request->session()->regenerate();
        }

        $token = $request->user()->createToken(AuthStatics::ADMIN_TOKEN->value);

        return response(['token' => $token->plainTextToken]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::user()->tokens()->delete();
        if(!$request->wantsJson()){
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();
        }
        return response()->noContent();
    }
}
