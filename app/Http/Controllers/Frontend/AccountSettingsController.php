<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateEmailRequest;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSettingsController extends Controller
{
    public function settings()
    {
        return view('pages.user.settings.index');
    }

    public function updateEmail(UpdateEmailRequest $request)
    {
        $user = auth()->user();
        //check if password is a match
        if(!Hash::check($request->validated()['password'], $user->password)) {
            notify()->error('An error occurred, make sure form is filled with correct information', 'Invalid input');
            return redirect()->back();
        }

        return DB::transaction(function() use($request, $user) {
            $user->update([
                'email' => $request->validated()['email']
            ]);

            $user->profile->update([
                'email' => $request->validated()['email']
            ]);

            notify()->success('Your email address has been successfully updated', 'Successful');

            return redirect()->back();
        });
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user = auth()->user();
        //check if password is a match
        if(!Hash::check($request->validated()['old_password'], $user->password)) {
            notify()->error('An error occurred, make sure form is filled with correct information', 'Invalid input');
            return redirect()->back();
        }

        return DB::transaction(function() use($request, $user) {
            $user->update([
                'password' => Hash::make($request->validated()['new_password'])
            ]);

            notify()->success('Password successfully updated', 'Successful');
            return redirect()->back();
        });
    }
}
