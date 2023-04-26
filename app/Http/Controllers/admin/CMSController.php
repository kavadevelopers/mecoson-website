<?php

namespace App\Http\Controllers\admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\HomeSliderModel;
use App\Models\MasterCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller{


    public function categoriesList(){
        $data['_title'] = 'Categories';
        $data['type']   = 0;
        $data['list']   = MasterCategories::where('is_deleted','0')->orderby('sort','asc')->get();
        return view('admin.user.cms.categories',$data);
    }

    public function categoriesEdit($item = false){
        $row = MasterCategories::find(decrypt($item));
        if($item && $row){

            $data['_title'] = 'Categories';
            $data['type']   = 1;
            $data['item']   = $row;
            $data['list']   = MasterCategories::where('is_deleted','0')->orderby('sort','asc')->get();
            return view('admin.user.cms.categories',$data);
        }else{
            return Redirect(CommonHelper::admin('cms/categories'));
        }
    }

    public function categoriesSave(Request $rec){
        
        $data = [
            'name'              => $rec->name,
            'sort'              => CommonHelper::isColValue($rec->order), 
            'slug'              => CommonHelper::categorySlug($rec->name) 
        ];

        MasterCategories::create($data);

        Session::flash('success', 'Categories Added');
	    return Redirect(CommonHelper::admin('cms/categories'));
    }

    public function categoriesUpdate(Request $rec){
        $row = MasterCategories::find($rec->item);
        if($row){
            $row->name = $rec->name;
            $row->sort = CommonHelper::isColValue($rec->order);
            $row->slug = CommonHelper::productSlug($rec->name,$rec->item);
            $row->save();
            Session::flash('success', 'Categories Updated');
            return Redirect(CommonHelper::admin('cms/categories'));
            
        }else{
            return Redirect(CommonHelper::admin('cms/categories'));
        }
    }

    public function categoriesDelete($item = false){
        $row = MasterCategories::find(decrypt($item));
        if($item && $row){

            $row->is_deleted = 1;
            $row->save();
            Session::flash('success', 'Category Deleted');
	        return Redirect(CommonHelper::admin('cms/categories'));
        }else{
            return Redirect(CommonHelper::admin('cms/categories'));
        }
    }
    
    public function homeSlidersList(){
        
        $data['_title'] = 'Home Sliders';
        $data['list']   = HomeSliderModel::orderby('sort','asc')->get();
        return view('admin.user.cms.home_sliders',$data);
    }

    public function homeSlidersDelete($item = false){
        $row = HomeSliderModel::find(decrypt($item));
        if($item && $row){

            if(Storage::disk('public_upload')->exists('cms/homebanner/'.$row->image)){
                Storage::disk('public_upload')->delete('cms/homebanner/'.$row->image);
            }

            $row->delete();



            Session::flash('success', 'Banner Deleted');
	        return Redirect(CommonHelper::admin('cms/home-sliders'));
        }else{
            return Redirect(CommonHelper::admin('cms/home-sliders'));
        }
    }

    public function homeSlidersSave(Request $rec){
        $banner = "";
        if ($rec->hasFile('banner')) {
            $image      = $rec->file('banner');
            $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
            if(Storage::disk('public_upload')->put('cms/homebanner/'.$imgName, file_get_contents($image))) {
                $banner = $imgName;
            }
        }

        $data = [
            'image'             => $banner,
            'sort'              => CommonHelper::isColValue($rec->order), 
        ];

        HomeSliderModel::create($data);

        Session::flash('success', 'Home Slider Added');
	    return Redirect(CommonHelper::admin('cms/home-sliders'));
    }
}
