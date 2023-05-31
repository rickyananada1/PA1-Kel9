<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\alualu;

class AdminController extends Controller
{
    public function Index()
    {
        return view('auth.login');
    } //end method

    public function Dashboard()
    {
        $alualu = alualu::latest()->paginate(10);
        return view('admin.page_alualu.all', compact('alualu'));
    }
    public function Login(Request $request)
    {
        $check = $request->all();

        $notification = array(
            'message' => 'Login Successfully',
            'alert-type' => 'success'
        );

        if (Auth::guard('admin')->attempt(['username' => $check['username'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with($notification);
        } elseif (Auth::guard('web')->attempt(['username' => $check['username'], 'password' => $check['password']])) {
            return redirect()->route('home.user');
        } else {
            return back()->with('error', 'Invalid Username or Password');
        }
    }

    public function AdminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home.user');
    }
}
