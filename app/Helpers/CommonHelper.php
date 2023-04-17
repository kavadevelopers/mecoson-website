<?php
namespace App\Helpers;

use App\Models\GlobalSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class CommonHelper
{
    // Globle Func
    public static function setting($key){
        return app(GlobalSettings::class)->get($key);
    }

    public static function retJson($array){
        return response()->json($array);
    }

    public static function isColValue($val){
        if ($val && $val != NULL && $val != "") {
            return $val;
        }else{
            return "";
        }
    }

    public static function isColValueDecInt($val){
        if ($val && $val != NULL && $val != "") {
            return $val;
        }else{
            return 0;
        }
    }

    public static function isValidRow($item,$key){
        if ($item) {
            return $item->$key;
        }else{
            return "";
        }
    }

    // admin helpers
    public static function getAdmin(){
        return Auth::guard('admin')->user();
    }

    public static function admin($link = false){
        if ($link) {
            return url('admin/'.$link);
        }else{
            return url('admin/login');
        }
    }

    public static function getAdminProfileImage(){
        if(Auth::guard('admin')->user()->gender == 'Male'){
            return asset('themes/images/user/male.png');
        }else{
            return asset('themes/images/user/female.png');
        }
    }

    public static function adminMenu($seg,$array,$parent = false){
        $ret = array("","","");
        $path = Request::segment($seg);
        if(!$parent){
            foreach($array as $a){
                if($path === $a){
                    $ret = array("active kava-active","active kava-active","pcoded-trigger kava-active");
                    break;
                }
            }
        }else{
            foreach($array as $a){
                if($parent == Request::segment($seg - 1) && $path === $a){
                    $ret = array("active kava-active","active kava-active","pcoded-trigger kava-active");
                }
            }
        }

        return $ret;
    }

    public static function redirectIfNotAuth($rights){
        if(count($rights) > 0){
            if(self::hasPermission($rights)){
                return true;
            }else{
                return Redirect(CommonHelper::admin('dashboard'))->send();
            }
        }else{
            if(Auth::guard('admin')->user()->admin_type == '0'){
                return true;
            }else{
                return Redirect(CommonHelper::admin('dashboard'))->send();
            }
        }
    }

    public static function hasPermission($rights){
        $user = Auth::guard('admin')->user();
        if($user->id != '1'){
            $counter = 0;
            foreach (explode(',',$user->rights) as $key => $value) {
	            if(in_array($value, $rights)){
	                $counter++;
	            }
	        }

            if($counter > 0){
	            return true;
	        }else{
	            return false;
	        }
        }else{
            return true;
        }
    }
}