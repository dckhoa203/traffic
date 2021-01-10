<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function get_login()
    {
        return view('login');
    }

    public function post_login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('password');
        dd($username);
    }
}
