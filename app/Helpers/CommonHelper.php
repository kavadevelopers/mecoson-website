<?php
namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\ProductModel;
use App\Models\GlobalSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class CommonHelper
{

    public static function moneyFormatIndia($amount,$remDec = false){
        $amount = round($amount,2);
        $amountArray =  explode('.', $amount);
        if(count($amountArray)==1){
            $int = $amountArray[0];
            $des=00;
        }else {
            $int = $amountArray[0];
            $des=$amountArray[1];
        }
        if(strlen($des)==1){
            $des=$des."0";
        }
        if($int>=0){
            $int = Self::numFormatIndia( $int );
            if ($remDec) {
                $themoney = $int;
            }else{
                $themoney = $int.".".$des;
            }       
        }else{
            $int=abs($int);
            $int = Self::numFormatIndia( $int );
            if ($remDec) {
                $themoney = $int;
            }else{
                $themoney = $int.".".$des;
            }       
        }
        return $themoney;
    }

    public static function numFormatIndia($num){
        $explrestunits = "";
        if(strlen($num)>3){
            $lastthree = substr($num, strlen($num)-3, strlen($num));
            $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
            $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
            $expunit = str_split($restunits, 2);
            for($i=0; $i<sizeof($expunit); $i++) {
                // creates each of the 2's group and adds a comma to the end
                if($i==0) {
                    $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
                } else {
                    $explrestunits .= $expunit[$i].",";
                }
            }
            $thecash = $explrestunits.$lastthree;
        } else {
            $thecash = $num;
        }
        return $thecash; // writes the final format where $currency is the currency symbol.
    }

    public static function productSlug($name,$id = false){
        if($id){
            $exists = ProductModel::where('slug',$slug = Str::slug($name))->where('id','!=',$id)->exists();
        }else{
            $exists = ProductModel::where('slug',$slug = Str::slug($name))->exists();
        }
        if ($exists) {
            $max = ProductModel::where('name',$name)->latest('id')->skip(1)->value('slug');
            if (isset($max[-1]) && is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
            return "{$slug}-2";
        }
        return $slug;
    }    

    public static function getProductImage($item){
        if(Storage::disk('public_upload')->exists('products/'.$item)){
            return url('uploads/products/'.$item);
        }else{
            return url('themes/thumbs/land.jpg');
        }
    }



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

    public static function stringReadMoreInline($str,$length) {
        $strOk = nl2br($str);
        if (strlen($str) > $length) {
            $delim = "~\n~";
            $append = '<span style="display:none;" class="full-string-span">'.substr($strOk,$length,strlen($str)).'</span><a href="#" class="link inline-readmore"><small>...more</small></a>';
            $str = substr($strOk,0,$length).$append;
        }
        return $str;
    }   

    public static function read_more_popup($str,$length){
        $append = '<a href="#" class="read-more-popup-btn link" data-full="'.nl2br($str).'"><small>...more</small></a>';
        if (strlen($str) > $length) {
            $delim = "~\n~";
            $str = substr($str, 0, strpos(wordwrap($str, $length, $delim), $delim)) . $append;
        } 
        return $str;
    }

    // admin helpers
    public static function getAdmin(){
        return Auth::guard('admin')->user();
    }

    public static function getUser(){
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