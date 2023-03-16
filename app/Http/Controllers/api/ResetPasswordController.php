<?php

namespace App\Http\Controllers\api;

use Carbon\Carbon;
use App\Models\Account;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use Illuminate\Routing\Controller;
use App\Notifications\ResetPasswordRequest;

class ResetPasswordController extends Controller
{
    public function sendMail(Request $request)
    {
        $user = Account::where('email', $request->email)->firstOrFail();
        $passwordReset = Account::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
  
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
            
        ]);
    }

    public function reset(Request $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return response()->json([
                'message' => 'This password reset token is invalid.',
            ], 422);
        }
        $user = PasswordReset::where('email', $passwordReset->email)->firstOrFail();
        $updatePasswordUser = $user->update($request->only('password'));
        $passwordReset->delete();

        return response()->json([
            'success' => $updatePasswordUser,
        ]);
    }
}
