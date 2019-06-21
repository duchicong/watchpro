<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function getSignin(){
      return view('back-end.auth.register');
    }
    public function postSignin(Request $req){
        $this->validate($req,
        [
            'name'  =>  'required|max:255',
            'email'  =>  'required|unique:users|email|max:255',
            'phone'  =>  'required|min:8|max:15',
            'address'  =>  'required|max:255',
            'password'  =>  'required|min:6|max:20',
            'password_confirmation'=>'required_with:password|same:password'
        ],
        [
            'name.required'   => 'Vui lòng nhập họ tên của bạn tại đây!',
            'name.max'   => 'Tên của bạn quá dài!',
            'email.required'   => 'Vui lòng nhập Email tại đây!',
            'email.email'      => 'Email vừa nhập không đúng!',
            'email.max'   => 'Email của bạn quá dài!',
            'email.unique'   => 'Email của bạn đã được đăng ký!',
            'address.max'   => 'Địa chỉ của bạn quá dài!',
            'address.required'   => 'Nhập địa chỉ ở đây!',
            'phone.max'   => 'Số điện thoại của bạn quá dài!',
            'phone.min'   => 'Số điện thoại của bạn quá ngắn!',
            'phone.required'   => 'Vui lòng nhập Số điện thoại tại đây!',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min'      => 'Mật khẩu tối thiểu là 6 ký tự',
            'password.max'      => 'Mật khẩu tối đa là 20 ký tự',
            'password_confirmation.required_with'=> 'Bạn chưa xác nhận lại mật khẩu',
            'password_confirmation.same'      => 'Mật khẩu này không trùng khớp'
        ]
    );
        $user = new User();
        $user ->name = $req ->name; 
        $user ->email = $req->email; 
        $user ->phone = $req->phone; 
        $user ->address = $req->address; 
        $user ->status = $req->sltCate; 
        $user ->remember_token = $req->_token; 
        $user ->password = Hash::make($req ->password); 
        $user ->save();
        return redirect('admin/signin')->with(['flash_level'=>'success','flash_massage'=>' Đã thêm thành công !']);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
}
