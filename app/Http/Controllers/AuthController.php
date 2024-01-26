<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{Auth, Hash};

class AuthController extends Controller
{
    public function loginGet()
    {
        $title = "Login";

        return view('/auth/login', compact("title"));
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $message = "Welcome ". auth()->user()->fullname;

            myFlasherBuilder(message: $message, success: true);
            return redirect('/home');
        }

        $message = "Email atau password salah!";

        myFlasherBuilder(message: $message, failed: true);
        return back();
    }

    public function registrationGet()
    {
        $title = "Registration";

        return view('/auth/register', compact("title"));
    }

    public function registrationPost(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'username' => 'required|max:15',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|confirmed|min:4',
            'phone' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required',
            'role_id' => 'required|numeric',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['image'] = env("IMAGE_PROFILE");
        $validatedData = array_merge($validatedData, [
            "role_id" => 2,
            "coupon" => 0,
            "point" => 0,
            'remember_token' => Str::random(30),
        ]);
        
        try {
            User::create($validatedData);
            $message = "Hai". $validatedData['fullname'] ." registrasi akun kamu berhasil";

            myFlasherBuilder(message: $message, success: true);

            return redirect('/auth/login');
        } catch (\Illuminate\Database\QueryException $exception) {
            return abort(500);
        }
    }

    public function logoutPost()
    {
        try {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            $message = "Berhasil logout dari aplikasi";

            myFlasherBuilder(message: $message, success: true);

            return redirect('/auth');
        } catch (\Illuminate\Database\QueryException $exception) {
            return abort(500);
        }
    }
}
