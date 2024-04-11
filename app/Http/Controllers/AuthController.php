<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_admin(){
        return view('admin.auth.login');
    }

    public function auth_login_admin(Request $request){
        $remember = !empty($request ->remember) ? true : false;
        if(aurth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1], $remember))
        {
            return redirect('admin/dashboard');
           
        }

         else{
                redirect()->back()->with('false, entre the currect email and password')
            }

    }
}
