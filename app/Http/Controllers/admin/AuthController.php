<?php

namespace App\Http\Controllers\admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\AdminUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    

    public function login(){
        $data['_title'] = 'Sign In';
        return view('admin.login',$data);
    }

    public function loginPost(Request $rec){
        $user = AdminUsers::where('username',$rec->username)->where('is_deleted','0')->first();
        if($user){
            if (password_verify($rec->password, $user->password)) {
                if($user->is_blocked == 0){
                    Auth::guard('admin')->login($user);
                    return CommonHelper::retJson(['_return' => true,'msg' => 'Login Successfull...']);
                }else{
                    return CommonHelper::retJson(['_return' => false,'msg' => 'Your account is blocked please contact administrator.']);    
                }
            }else{
                return CommonHelper::retJson(['_return' => false,'msg' => 'Username and password do not match']);    
            }
        }else{
            return CommonHelper::retJson(['_return' => false,'msg' => 'Username Not Registered']);
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return Redirect(CommonHelper::admin(''));
    }
}
