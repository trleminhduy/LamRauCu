<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function showResetForm($token){
        return view ('clients.auth.reset-password',['token'=>$token]);
    }

    public function resetPassword(Request $request){
        
        $request->validate( //validate để tránh trường hợp người dùng chưa tạo tài khoản
            [
                'email' => 'required|email|exists:users,email',
                'password'=>'required|min:6|confirmed',
                'token'=>'required'

            ],
            [

                'email.required' => 'Email là bắt buộc',
                'email.email' => 'Email không hợp lệ',
                'email.exists' => 'Email này chưa được đăng ký',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
                'password.confirmed'=>'Mật khẩu xác nhận không khớp',
                'token.required'=>'Mã token đã hết hạn hoặc không khớp'
            ]
        );
        $status = Password::reset(
            $request->only('email','password','password_confirmation','token'),
            function ($user, $password){
                $user->forceFill([
                'password'=>Hash::make($password)
            ])->save();
            }
            
        );

        if($status === Password::PASSWORD_RESET){
            toastr()->success('Mật khẩu được đặt lại thành công');
            return redirect()->route('login');
        }
         toastr()->error('Không thể đặt lại mật khẩu');
        return back()->withErrors(['email' => __($status)]);
    }
}
