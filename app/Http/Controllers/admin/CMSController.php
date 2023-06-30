<?php

namespace App\Http\Controllers\admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\CMSPagesModel;
use App\Models\DownloadsModel;
use App\Models\HomeSliderModel;
use App\Models\MasterCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller{

    public function filesList(){
        $data['_title'] = 'Downloads';
        $data['list']   = DownloadsModel::orderby('sort','asc')->get();
        return view('admin.user.cms.downloads',$data);
    }

    public function filesDelete($item = false){
        $row = DownloadsModel::find(decrypt($item));
        if($item && $row){

            if(Storage::disk('public_upload')->exists('cms/downloads/'.$row->value)){
                Storage::disk('public_upload')->delete('cms/downloads/'.$row->value);
            }

            $row->delete();



            Session::flash('success', 'Download Deleted');
	        return Redirect(CommonHelper::admin('cms/files'));
        }else{
            return Redirect(CommonHelper::admin('cms/files'));
        }
    }

    public function filesSave(Request $rec){
        
        
        if ($rec->hasFile('file')) {
            $image      = $rec->file('file');
            $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
            if(!Storage::disk('public_upload')->put('cms/downloads/'.$imgName, file_get_contents($image))) {
                $imgName = "";
            }
        }

        if($imgName == ""){
            Session::flash('error', 'File upload Error.');
	        return Redirect(CommonHelper::admin('cms/files'));
        }else{
            DownloadsModel::create([
                'item'      => $rec->name,
                'value'     => $imgName,
                'sort'      => $rec->order
            ]);

            Session::flash('success', 'Documents Created');
	        return Redirect(CommonHelper::admin('cms/files'));
        }

        // if ($rec->hasFile('company_profile')) {
        //     $image      = $rec->file('company_profile');
        //     $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
        //     if(Storage::disk('public_upload')->put('cms/downloads/'.$imgName, file_get_contents($image))) {

        //         $item = DownloadsModel::where('item','company_profile')->first();

        //         if(Storage::disk('public_upload')->exists('cms/downloads/'.$item->value)){
        //             Storage::disk('public_upload')->delete('cms/downloads/'.$item->value);
        //         }

        //         DownloadsModel::where('item','company_profile')->update(['value' => $imgName]);
        //     }
        // }

        // if ($rec->hasFile('product_list')) {
        //     $image      = $rec->file('product_list');
        //     $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
        //     if(Storage::disk('public_upload')->put('cms/downloads/'.$imgName, file_get_contents($image))) {
        //         $item = DownloadsModel::where('item','product_list')->first();

        //         if(Storage::disk('public_upload')->exists('cms/downloads/'.$item->value)){
        //             Storage::disk('public_upload')->delete('cms/downloads/'.$item->value);
        //         }

        //         DownloadsModel::where('item','product_list')->update(['value' => $imgName]);
        //     }
        // }

        // if ($rec->hasFile('product_brochure')) {
        //     $image      = $rec->file('product_brochure');
        //     $imgName   = microtime(true) . '.' . $image->getClientOriginalExtension();
        //     if(Storage::disk('public_upload')->put('cms/downloads/'.$imgName, file_get_contents($image))) {

        //         $item = DownloadsModel::where('item','product_brochure')->first();

        //         if(Storage::disk('public_upload')->exists('cms/downloads/'.$item->value)){
        //             Storage::disk('public_upload')->delete('cms/downloads/'.$item->value);
        //         }

        //         DownloadsModel::where('item','product_brochure')->update(['value' => $imgName]);
        //     }
        // }

    }

    public function currentJobs(){
        $data['_title'] = 'Current Jobs';
        $data['item']   = CMSPagesModel::where('slug','current-jobs')->first();
        return view('admin.user.cms.page',$data);
    }

    public function currentSave(Request $rec){
        $row = CMSPagesModel::find($rec->item);
        if($row){
            $row->description = CommonHelper::isColValue($rec->description);
            $row->save();

            Session::flash('success', 'Page Updated');
            return Redirect(CommonHelper::admin('cms/'.$rec->slug));
            
        }else{
            return Redirect(CommonHelper::admin('cms/'.$rec->slug));
        }
    }

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
