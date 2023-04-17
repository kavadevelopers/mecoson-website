<?php

namespace App\Http\Controllers\admin;

use App\Helpers\Common;
use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SettingController extends BaseController
{

    public function index(){
		CommonHelper::redirectIfNotAuth([]);
		$data['_title'] = 'Settings';
		return view('admin.user.masters.settings',$data);
    }

    public function save(Request $rec){
        $data = $rec->all();

		foreach ($data as $key => $value) {
			SettingModel::where('item',$key)->update(['value' => CommonHelper::isColValue($value)]);
	    }


	    Session::flash('success', 'Settings saved.');
	    return Redirect::back();
    }
}
