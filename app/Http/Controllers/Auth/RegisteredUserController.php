<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'full_name' => ['nullable', 'string', 'max:255'], // Optional field
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'max:15'], // Optional, and max length of 15 for phone numbers
            'date_of_birth' => ['nullable', 'date'], // Must be a valid date
            'account_type' => ['nullable', 'string', 'max:255'], // Must be one of the specified values
            'investment_plan' => ['nullable', 'string', 'max:255'], // Must be one of the specified values
            'country' => ['nullable', 'string', 'max:255'], // Optional field
            'profile_image' => ['nullable', 'image', 'max:2048'], // Optional, must be an image and not exceed 2MB
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


       $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'full_name' => $request->full_name ?? $request->first_name . ' ' . $request->last_name, // Optional field
            'email' => $request->email,
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'account_type' => $request->account_type,
            'investment_plan' => $request->investment_plan,
            'country' => $request->country,
            'profile_image' => $request->profile_image,

            // Assuming you're handling file uploads elsewhere
            'password' => Hash::make($request->password),

        ]);


        if ($request->hasFile('profile_image')) {
                $path = $request->file('profile_image')->store('profile_images', 'public');
                $user->update(['profile_image' => $path]);
            }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('login', absolute: false));
    }
}