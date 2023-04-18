<?php

namespace App\Http\Controllers\admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\AdminUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends BaseController
{
    public function index(){
        $data['_title'] = 'Dashboard';
		return view('admin.user.dashboard',$data);
    }

    public function profile(){
        $data['_title'] = 'Profile';
        $data['item']	 = CommonHelper::getUser();
		return view('admin.user.profile',$data);
    }

    public function saveProfile(Request $rec){
		$data = [
			'name'			=> 	$rec->name,
			'username'		=> 	$rec->username,
			'email'			=> 	$rec->email,
			'mobile'		=> 	$rec->mobile
		];

		AdminUsers::where('id',Auth::guard('admin')->user()->id)->update($data);

		if ($rec->password) {
			$data = [
				'password'		=> 	password_hash($rec->password, PASSWORD_DEFAULT),
			];
			AdminUsers::where('id',Auth::guard('admin')->user()->id)->update($data);
		}

		Session::flash('success', 'Profile updated.');
		return Redirect()->back();
	}
}
