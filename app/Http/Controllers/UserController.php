<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

        $user = User::where('username',$username)->first();
        
        if($user) {
            if ( Hash::check($password,$user->password) == true) {
                $request->session()->put('user', $user);

                if ( $user->type == 0 ){
                    return redirect('admin');
                }

                if ( $user->type == 1 ){
                    return redirect('user');
                }
            
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('/');
    }
}
