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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' => ['required', 'string', 'max:15'], // You might want to add additional validation rules for the phone number
            'gender' => ['required', 'string', 'in:Male,Female'],
            'address' => ['required', 'string', 'max:255'],
            'profile' => ['required', 'array', 'max:5'], // Adjust max:5 according to your needs
            'profile.*' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Adjust max:2048 according to your needs
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Handle file upload for profile images
        // Handle file upload for profile images
$profilePaths = [];
if ($request->hasFile('profile')) {
    foreach ($request->file('profile') as $file) {
        // Store the file in the public directory under the 'profiles' folder
        $profilePaths[] = $file->storeAs('profiles', $file->getClientOriginalName(), 'public');
    }
}


        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'profile' => $profilePaths, // Save paths to profiles
            'password' => Hash::make($request->input('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
