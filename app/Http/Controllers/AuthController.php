<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Account;
use App\Models\Position;

class AuthController extends Controller
{
    public function handleLogin(Request $request) {
        // lay du lieu tu form tuong ung
        $arr = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // kiem tra truong hop dung
        if (Auth::attempt($arr)) {
            // Tao session duy tri trang thai dang nhap
            session()->put('user','Người Dùng');

            // Tao phan quyen
            $accounts = Account::select('id_position','parent_id','username')->where('username',$request->username)->get();
            foreach($accounts as $account) {
                $position = Position::select('position')->where('id_position',$account->id_position)->value('position');
            }
            session()->put('position',$position);
            session()->put('root','Soraesushi System');

            // Truy cap vao dashboard
            return redirect()->intended('admin/index');

        } else {
            return redirect('admin/login');
        }
    }

    // Them tai khoan
    public function handleRegister(Request $request) {
        if ($request->submit == "Register") {
            $email = $request->email;

            // checking email
            if (Accounts::where('email','=',$email)->count() > 0) {
                dd('email nay da ton tai!');
            } else {
                $username = $request->username;
                $password = $request->password;
                $role = $request->role;

                $data = [
                    'username' => $username,
                    'password' => bcrypt($password),
                    'email' => $email,
                    'parent_id' => $role
                ];

                Accounts::insert($data);

                session()->put('message','Đăng ký thành công!');

                return redirect('admin/register');
            }
        } else {
            dd('something is wrong!');
        }
    }

    // Xoa session hien tai
    public function handleLogout(Request $request) {
        if(session()->has('user')) {
            session()->forget('user');
        }
        return redirect('admin/login');
    }
}
