<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiryModel;
use App\Models\HomeSliderModel;
use App\Models\MasterCategories;
use App\Models\ProductEnquiryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    
    public function home(){
        $data['_title'] = 'Home';
        $data['banners'] = HomeSliderModel::orderby('sort','asc')->get();
        return view('web.home')->with($data);
    }

    public function products(){
        $data['_title'] = 'Products';
        $data['list']   = ProductModel::with('_category')->orderby('name','asc');
        return view('web.product.all')->with($data);
    }

    public function about(){
        $data['_title'] = 'About Us';
        return view('web.about')->with($data);
    }

    public function contact(){
        $data['_title'] = 'Contact Us';
        return view('web.contact')->with($data);
    }

    public function product($slug = false){
        $product = ProductModel::where('slug',$slug)->first();
        if($slug && $product){
            $data['_title'] = $product->name;
            $data['product']    = $product;
            return view('web.product.item')->with($data);
        }else{
            abort('404');
        }
    }

    public function category($slug = false){
        $category = MasterCategories::where('slug',$slug)->first();
        if($slug && $category){
            $data['_title'] = $category->name;
            $data['list']   = ProductModel::where('category',$category->id)->with('_category')->orderby('name','asc');
            return view('web.product.all')->with($data);
        }else{
            abort('404');
        }
    }

    public function contactSave(Request $rec){
        
        ContactEnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'phone'  => $rec->phone,
            'subject'  => $rec->subject,
            'description'  => $rec->message,
        ]);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect('contact-us');
    }

    public function enquiry(Request $rec){
        
        ProductEnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'phone'  => $rec->phone,
            'subject'  => $rec->subject,
            'description'  => $rec->message,
        ]);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect::back();
    }
    
}
