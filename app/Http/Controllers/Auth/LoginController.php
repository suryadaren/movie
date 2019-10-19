<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/login';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // menampilkan halaman login
    public function index(){
        return view('login');
    }

    // memeriksa data login
    public function loginCheck(Request $request){

        // untuk keamanan hanya mengambil data username dan password
        $credentials = $request->only('username', 'password');

        // jikad ata benar maka akan otomatis membuat session user
        if (auth()->attempt($credentials)) {
            $notif = [
                'alert-type' => "success",
                'message' => "Login Success"
            ];
            return redirect('/admin')->with($notif);
        }else{
            $notif = [
                'alert-type' => "error",
                'message' => "Username or Password incorrect"
            ];
            return redirect('/login')->with($notif);
        }
    }

    // fungsi untuk logout user
    public function logout(){
        auth()->logout();
            $notif = [
                'alert-type' => "success",
                'message' => "Logout Success"
            ];
        return redirect('/')->with($notif);
    }
}
