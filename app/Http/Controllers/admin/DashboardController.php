<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index(){
        $data['_title'] = 'Dashboard';
		return view('admin.user.dashboard',$data);
    }
}
