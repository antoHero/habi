<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\{User, Profile};
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, DB};
use Illuminate\Validation\Rules;
use App\Enums\ProfileTypeEnum;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        return DB::transaction(function() use($request) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $profile = Profile::create([
                'user_id' => $user->id,
                'email' => $user->email,
                'name' => $user->name,
                'gender' => '',
                'phone' => '',
                'address' => '',
                'country' => '',
                'state' => '',
                'city' => '',
                'code' => '',
                'type' => ProfileTypeEnum::user()
            ]);

            event(new Registered($user));
            if($profile->type->equals(ProfileTypeEnum::admin(), ProfileTypeEnum::super())) {
                return redirect()->route('dashboard.index');
            } 

            return redirect()->route('get.home');
        });
    }
}
