<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function doLogin(Request $request) {
        // ❌ Tidak divalidasi
        $user = DB::selectOne(
            "SELECT * FROM users WHERE username = '{$request->username}' AND password = '{$request->password}'"
        ); // ❌ SQL Injection bisa!

        if ($user) {
            session(['user' => $user->username]); // ❌ Session tidak aman
            return redirect('/dashboard');
        }
        return "Login gagal!";
    }
}
