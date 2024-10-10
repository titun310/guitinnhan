<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Kiểm tra thông tin đăng nhập
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           // Đăng nhập thành công, chuyển hướng đến dashboard
            return redirect()->route('sub.dashboard')->with('success', 'Đăng nhập thành công!'); 
       
        }
        // Nếu không đúng, quay lại trang đăng nhập và hiển thị lỗi
        return back()->withErrors(['email' => 'Email hoặc mật khẩu không đúng.']);
    
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
