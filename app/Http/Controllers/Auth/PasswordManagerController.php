<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordValidation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordManagerController extends Controller
{
    public function changePassword()
    {
        return view('auth.change_password');
    }

    public function postChangePassword(ChangePasswordValidation $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $user->update(['password' => Hash::make($request->get('new_password'))]);
        }

        return redirect('/');
    }
}
