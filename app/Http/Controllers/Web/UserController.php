<?php
namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Setting;
use Session;
use Hash;
class UserController extends Controller{
	protected $rules_login = [
        'username' => 'required|max:255',
        'password' => 'required|min:6',
    ];
	public function login(Request $request){
		if(Session::get('user')){
			return redirect('user/post/index');
		}
		if ($request->isMethod('post')) {
			$this->validate($request,$this->rules_login);
			$user = User::where('username',$request->input('username'))->first();
			if($user){
				if(Hash::check($request->input('password'),$user->password)){
	                Session::put('user', $user);
	                Session::flash('success','Đăng nhập thành công.');
	                return redirect('user/post/index');
	            }else{
	            	Session::flash('error','Passowrd không đúng.');
					return back();
	            }
			}else{
				Session::flash('error','Username không đúng.');
				return back();
			}
		}else{
			return view('web.user.login');
		}
	}
}