<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request){

        {

            $admin = new Admin();
            $admin->email = $request->input('email');
            $admin->password = $request->input('password');
            $admin->save();

            return "data save successfully";
//        return redirect()->back();
        }

    }

    public function dashboard(){
        return view('dashboard');
    }
    public function logout(Request $request)
    {
    auth()->logout();
        return redirect()->route('admin_login');
    }


}
