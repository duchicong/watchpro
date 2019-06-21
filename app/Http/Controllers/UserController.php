<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Resetpassword;
use Hash,Redirect,Datetime,Auth,Mail,Session,validate;

use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	// Quản lý logout and login 
    public function getregister(){
    	return view('auth.register');
    }
    public function postregister(Request $req){
        $this->validate($req,
            [
                'name'=>'required|max:255',
                'phone'=>'required|min:9|max:12',
                'email'=>'required|max:255|unique:users|email',
                'address'=>'required|max:255',
                'password'=>'required|min:6|max:20',
                'password_confirmation'=>'required_with:password|same:password'
            ],
            [
                'name.required'   => 'Vui lòng nhập họ tên của bạn tại đây!',
                'name.max'   => 'Tên của bạn quá dài!',
                'email.max'   => 'Email của bạn quá dài!',
                'email.unique'   => 'Email của bạn đã được đăng ký!',
                'address.max'   => 'Địa chỉ của bạn quá dài!',
                'phone.max'   => 'Số điện thoại của bạn quá dài!',
                'phone.min'   => 'Số điện thoại của bạn quá ngắn!',
                'phone.required'   => 'Vui lòng nhập Số điện thoại tại đây!',
                'phone.phone'   => 'Số điện thoại không đúng!',
                'address.required'   => 'Nhập địa chỉ ở đây!',
                'email.required'   => 'Vui lòng nhập Email tại đây!',
                'email.email'      => 'Email vừa nhập không đúng!',
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min'      => 'Mật khẩu tối thiểu là 6 ký tự',
                'password.max'      => 'Mật khẩu tối đa là 20 ký tự',
                'password_confirmation.required_with'      => 'Bạn chưa xác nhận lại mật khẩu',
                'password_confirmation.same'      => 'Mật khẩu này không trùng khớp'
            ]
        );
    	$user = new User();
		$user ->name = $req ->name; 
		$user ->email = $req->email; 
		$user ->phone = $req->phone; 
		$user ->address = $req->address; 
		$user ->password = Hash::make($req ->password); 
		$user ->save();
		return redirect::back()->with(['flash_level'=>'success','flash_massage'=>' Đã thêm thành công !']);
    }

	public function getLogin(){
		return view('auth.login');
	}

	public function postlogin(Request $request){

        $rules = [
        'email' =>'required|email',
        'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        
        if ($validator->fails()) {
            
            return redirect('dang-nhap')->withErrors($validator)->withInput();
        } else {
            if(Auth::attempt($request->only('email','password'),$request->has('remember'))){
                return redirect()->route('index')->with([
                    'flag'=>'success',
                    'message'=>'Đăng nhập thành công'
                ]);
            }else{
                return redirect()->route('userlogin')->with([
                    'flag'=>'danger',
                    'message'=>'Tài khoản hoặc mật khẩu không đúng!'
                ]);
            }
        }
    }
    public function getUsertLogout(){
		Auth::logout();
		return redirect()->route('index');
    }
    // reset password
    public function getforgetpassword(){
        return view('auth.passwords.email');
    }
    public function postforgetpassword(request $rq, $token='null'){
        $this->validate($rq,
            [
                'email'=>'required|email',
            ],
            [
                'email.required'   => 'Vui lòng nhập Email tại đây!',
                'email.email'      => 'Email vừa nhập không đúng!'
            ]
        );

        $mail = $rq->email;
        $check = User::where('email',$mail)->first();
        $token = User::where('email',$mail)->select('remember_token')->first();
        // dd($check);
        if(!empty($check)){
            $link = url('lay-lai-mat-khau/'.$token->remember_token);
            $data = ['email'=>$mail];
            Mail::send('detail.mail_resetpassword', ['data'=>$data,'link'=>$link],function($msg) use ($data, $link, $mail) {
                $msg->from('hotrowatchpro247@gmail.com','Hỗ trợ WatchPro');
                $msg->to($mail,'Lấy lại mật khẩu')->subject('LẤY LẠI MẬT KHẨU TẠI WATCHPRO');
            });
            return redirect::back()->with([
                'flag'  =>  'success',
                'message'=>'Vui lòng kiếm tra email của bạn!'
            ]);
        }else{
            return redirect::back()->with([
                'flag'  => 'danger',
                'message'=>'Kiểm tra trong hệ thống không có email này!'
            ]);
        }
    }
    public function getresetpassword($token){
        $checktoken = User::where('remember_token',$token)->first();
        // dd($checktoken);
        if(!empty($checktoken)){
            return view('auth.passwords.reset');    
        }else{
            return redirect::route('error503');
        }
        
    }
    public function postresetpassword(request $rq, $token){
        $this->validate($rq,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20',
                'password_confirmation'=>'required_with:password|same:password'
            ],
            [
                'email.required'   => 'Vui lòng nhập Email tại đây!',
                'email.email'      => 'Email vừa nhập không đúng!',
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min'      => 'Mật khẩu tối thiểu là 6 ký tự',
                'password.max'      => 'Mật khẩu tối đa là 20 ký tự',
                'password_confirmation.required_with'      => 'Bạn chưa xác nhận lại mật khẩu',
                'password_confirmation.same'      => 'Mật khẩu này không trùng khớp'
            ]
        );
        $check = User::where('remember_token',$token)->first();

        if($check->email == $rq->email){
            $email = $rq->email;
            $reset = User::where('email',$check->email)->firstOrFail();
            $reset->password = Hash::make($rq->password);
            $reset->remember_token = $rq->_token;
            $reset->save();

            $resetPassword = new Resetpassword;
            $resetPassword->email = $rq->email;
            $resetPassword->token = $rq->_token;
            $resetPassword->created_at = new datetime;
            $resetPassword->save();
            // dd($resetPassword, $reset);
            return redirect::route('userlogin')->with([
                'flag'  =>  'success',
                'message'=> 'Cập nhật mật khẩu thành công!'
            ]);
        }else{
            return redirect::back()->with([
                'flag'  =>  'danger',
                'message'=> 'Email này không được đăng ký với tài khoản hiện tại!'
            ]);
        }
    }
}
