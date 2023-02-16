<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PasswordController extends Controller
{
    public function generate()
    {
        $password = Str::password(10,$letters=false); // Generate a random password with 10 characters
        return view('welcome', ['password' => $password]);
    }
}
