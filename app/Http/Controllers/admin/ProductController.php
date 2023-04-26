<?php

namespace App\Http\Controllers\admin;

use App\Helpers\CommonHelper;
use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    

    public function index(){
        $data['_title'] = 'Products List';
        $data['list']	 = ProductModel::orderby('id','desc')->with('_category')->get();
		return view('admin.user.products.index',$data);
    }

    public function create(){
        $data['_title'] = 'Product Create';
		return view('admin.user.products.create',$data);
    }
    
    public function edit($item = false){
        $row = ProductModel::find(decrypt($item));
        if($item && $row){
            
            $data['_title'] = 'Product Edit';
            $data['item']   = $row;
		    return view('admin.user.products.update',$data);

        }else{
            return Redirect(CommonHelper::admin('products'));
        }
    }

    public function save(Request $rec){
        $banner = "";
        if($rec->bannerbase64 != ""){
            $base64_str = substr($rec->bannerbase64, strpos($rec->bannerbase64, ",")+1);
            $image = base64_decode($base64_str);
            $imageName = microtime(true).'.png';
            if(Storage::disk('public_upload')->put('products/'.$imageName, $image)) {
                $banner = $imageName;
            }
        }

        
        $data = [
            'category'          => $rec->category,
            'name'              => $rec->name,
            'slug'              => CommonHelper::productSlug($rec->name),
            'price'             => CommonHelper::isColValueDecInt($rec->price), 
            'image'             => $banner,
            'short_description' => $rec->short_description, 
            'long_description'  => CommonHelper::isColValue($rec->long_description), 
        ];

        ProductModel::create($data);

        Session::flash('success', 'Product Saved');
	    return Redirect(CommonHelper::admin('products'));
    }

    public function update(Request $rec){
        $row = ProductModel::find($rec->item);
        if($row){
            
            $row->category = $rec->category;
            $row->name = $rec->name;
            $row->short_description = $rec->short_description;
            $row->long_description  = CommonHelper::isColValue($rec->long_description);
            $row->price  = CommonHelper::isColValueDecInt($rec->price);
            $row->slug = CommonHelper::productSlug($rec->name,$rec->item);
            
            if($rec->bannerbase64 != ""){
                $base64_str = substr($rec->bannerbase64, strpos($rec->bannerbase64, ",")+1);
                $image = base64_decode($base64_str);
                $imageName = microtime(true).'.png';
                if(Storage::disk('public_upload')->put('products/'.$imageName, $image)) {
                    
                    if(Storage::disk('public_upload')->exists('products/'.$row->image)){
                        Storage::disk('public_upload')->delete('products/'.$row->image);
                    }

                    $row->image = $imageName;
                }
            }
            $row->save();
            Session::flash('success', 'Product Updated');
	        return Redirect(CommonHelper::admin('products'));

        }else{
            return Redirect(CommonHelper::admin('products'));
        }
    }

    public function delete($item = false){
        $row = ProductModel::find(decrypt($item));
        if($item && $row){

            if(Storage::disk('public_upload')->exists('products/'.$row->image)){
                Storage::disk('public_upload')->delete('products/'.$row->image);
            }

            $row->delete();



            Session::flash('success', 'Product Deleted');
	        return Redirect(CommonHelper::admin('products'));
        }else{
            return Redirect(CommonHelper::admin('products'));
        }
    }
}
