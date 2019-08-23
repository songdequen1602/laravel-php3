<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Models\User;

class UserController extends Controller
{
	public function getLogin() {
		return view('admin/user/user-login');
	}
	public function postLogin(Request $request) {
		$users = User::all();
		$rules = [
			'email' =>'required|email',
			'password' => 'required|min:8'
		];
		$messages = [
			'email.required' => 'Email là trường bắt buộc',
			'email.email' => 'Email không đúng định dạng',
			'password.required' => 'Mật khẩu là trường bắt buộc',
			'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		

		// if ($validator->fails()) {
		// 	return redirect()->back()->withErrors($validator)->withInput();
		// } else {
		$email = $request->input('email');
		$password = $request->input('password');

		foreach ($users as $u) {
			if ($email == $u->email && $password == $u->password) {
				return redirect()->route('admin-page');
			}
			else{
				echo "dang nhap k thanh cong";
			}
		}
		// }
	}

	public function getRegister() {
		return view('site/user/user-register');
	}
	public function postRegister(Request $request)
	{
		$data = $request->except('_token');
		User::insert($data);
		return redirect()->route('home');
	}
}
