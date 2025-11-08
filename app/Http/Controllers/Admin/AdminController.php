<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin dashboard
    public function index()
    {
        $counts = (object) [
            'students_count' => Student::count(),//whereHas('user', fn($q) => $q->where('is_active', 1))->count(),
            'teachers_count' => Teacher::count(),//whereHas('user', fn($q) => $q->where('is_active', 1))->count(),
            'subjects_count' => Subject::count(),
        ];

        return view('pages.admin.dashboard', compact('counts'));
    }

    // Admin profile page
    public function showProfile()
    {
        return view('pages.admin.profile');
    }

    // Admin settings page
    public function showSettings()
    {
        return view('pages.admin.settings');
    }

    // Update admin email and/or password
    public function updateSettings(Request $request)
    {
        $request->validate([
            'email' => 'required|email|string|max:255|unique:users,email,' . auth()->id(),
            'old_password' => 'nullable|string|min:8',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = auth()->user();
        $emailChanged = false;

        // Update email if changed
        if ($request->email !== $user->email) {
            $user->update(['email' => $request->email]);
            $emailChanged = true;
        }

        // Update password if requested
        if ($request->old_password && $request->password) {
            if (!password_verify($request->old_password, $user->password)) {
                return back()->with('error', 'Old password is incorrect');
            }
            $user->update(['password' => bcrypt($request->password)]);
        }

        // If email changed, force logout
        if ($emailChanged) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/')->with('success', 'Email changed. Please login again.');
        }

        return back()->with('success', 'Settings updated successfully.');
    }

    // Messages index page
    public function showMessages()
    {
        return view('pages.admin.messages.index');
    }

    // Single message view
    public function showMessage()
    {
        return view('pages.admin.messages.show');
    }
}
