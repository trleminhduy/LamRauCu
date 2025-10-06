<?php

namespace App\Http\Controllers\Clients;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('clients.pages.account', compact('user'));
    }


    //Update information cap nhat lai thong tin
    public function update(Request $request)
    {
        $request->validate([
            'ltn__name' => 'required|string|max:255',
            'ltn__phone_number' => 'nullable|string|max:15',
            'ltn__address' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $userId = Auth::id();

        // 1. Update thông tin cơ bản
        User::where('id', $userId)->update([
            'name' => $request->ltn__name,
            'phone_number' => $request->ltn__phone_number,
            'address' => $request->ltn__address,
        ]);

        // 2. Xử lý avatar riêng
        if ($request->hasFile('avatar')) {
            $user = User::find($userId);

            // Xóa ảnh cũ
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            // Upload ảnh mới tới storage/app/public/users/tenfile.jpg
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $avatarPath = $file->storeAs('uploads/users', $filename, 'public');

            // Update avatar
            $user->avatar = $avatarPath;
            $user->save();
        }

        $user = User::find($userId);

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thành công',
            'avatar' => $user->avatar ? asset('storage/' . $user->avatar) : null
        ]);
    }

    //Change password
    public function changePassword(Request $request)
    {

        $request->validate(
            [
                'current_password' => 'required',
                'new_password' => 'required|min:6',
                'confirm_new_password' => 'required|same:new_password'
            ],
            [
                'current_password.required' => 'Vui lòng nhập mật khẩu hiện tại',
                'new_password.required' => 'Mật khẩu mới không được để trống',
                'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự',
                'confirm_new_password.required' => 'Vui lòng nhập mật khẩu mới',
                'confirm_new_password.same' => 'Mật khẩu nhập lại không khớp',
            ]
        );
        $userId = Auth::id();
        $user = User::find($userId);

        //Check mật khẩu hiện tại không trùng khớp với mật khẩu 
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['errors' => ['current_password' => ['Mật khẩu hiện tại không đúng!']]], 422);
        }

        //Nếu đúng mật khẩu
        $user->update(['password' => Hash::make($request->new_password)]);


        return response()->json([
            'success' => true,
            'message' => 'Đổi mật khẩu thành công',

        ]);
    }
}
