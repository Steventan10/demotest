<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user = session('user');
        if (!$user) {
            return redirect('/login');
        }
        return view('dashboard', compact('user'));
    }

    public function submit(Request $request) {
        // ❌ Tidak divalidasi, rentan XSS
        $name = $request->input('name');
        $email = $request->input('email');

        return view('submitted', compact('name', 'email'));
    }
}
