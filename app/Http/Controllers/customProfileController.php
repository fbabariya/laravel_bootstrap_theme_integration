<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class customProfileController extends Controller
{
    public function show(Request $request)
{   
    if (auth()->check()) {
        $user = auth()->user();
        
        return view('profile-show', compact('user'));
    } else {
        // User is not authenticated, handle the situation (e.g., redirect to login page)
        return redirect()->route('login');
    }
}

public function edit()
    {
        $user = Auth::user();
        return view('user-profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only('name', 'email'));
        return redirect()->route('profile.show')->with('success', 'User information updated successfully');
    }

    public function colors()
    {
        return view('customfiles.color');
    }
    public function cards()
    {
        return view('customfiles.cards');
    }

    public function border()
    {
        return view('customfiles.project-border');
    }

    public function charts()
    {
        return view('customfiles.charts');
    }
}
