<?php

namespace App\Http\Controllers\web;

use App\Helpers\CommonHelper;
use App\Helpers\PMailer;
use App\Http\Controllers\Controller;
use App\Models\CMSPagesModel;
use App\Models\ContactEnquiryModel;
use App\Models\DownloadsModel;
use App\Models\HomeSliderModel;
use App\Models\MasterCategories;
use App\Models\ProductEnquiryModel;
use App\Models\ProductModel;
use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function test(){
        $data['name'] = 'Kava';
        $data['email'] = 'Kava@gmail.com';
        $data['mobile'] = '9898375981';
        $data['subject'] = 'Sample Email';
        $data['message'] = 'Sample Email message';
        $body = view('emails.inquiry',$data)->render();
        PMailer::send('mehul9921@gmail.com','test email',$body);
    }
    
    public function home(){
        $data['_title'] = 'Home';
        $data['banners'] = HomeSliderModel::orderby('sort','asc')->get();
        return view('web.home')->with($data);
    }

    public function products(){
        $data['_title'] = 'Products';
        $data['categories'] = MasterCategories::select('name','id','slug')->where('is_deleted','0')->orderby('sort','asc')->get();
        $data['list']   = ProductModel::with('_category')->orderby('name','asc');
        return view('web.product.all')->with($data);
    }

    public function about(){
        $data['_title'] = 'History & Development';
        return view('web.about')->with($data);
    }

    public function missionVisonValues(){
        $data['_title'] = 'Mission, Vision & Values';
        return view('web.aboutmiviva')->with($data);
    }

    public function qualityPolicy(){
        $data['_title'] = 'Quality Assurance';
        return view('web.aboutquality')->with($data);
    }

    public function globalPresence(){
        $data['_title'] = 'Global Presence';
        return view('web.aboutglobal')->with($data);
    }

    public function contact(){
        $data['_title'] = 'Contact Us';
        return view('web.contact')->with($data);
    }

    public function business(){
        $data['_title'] = 'Inquiry';
        return view('web.business')->with($data);
    }

    public function career(){
        $data['_title'] = 'Career';
        return view('web.career')->with($data);
    }

    public function currentJobs(){
        $data['_title'] = 'Current Jobs';
        $data['item'] = CMSPagesModel::where('slug','current-jobs')->first();
        return view('web.current-jobs')->with($data);
    }

    public function downloads(){
        $data['_title'] = 'Downloads';
        $data['list'] = DownloadsModel::orderby('sort','asc')->get();
        return view('web.downloads')->with($data);
    }

    public function product($slug = false){
        $product = ProductModel::where('slug',$slug)->first();
        if($slug && $product){
            $data['_title'] = $product->name;
            $data['product']    = $product;
            $data['categories'] = MasterCategories::select('name','id','slug')->where('is_deleted','0')->orderby('sort','asc')->get();
            return view('web.product.item')->with($data);
        }else{
            abort('404');
        }
    }

    public function category($slug = false){
        $category = MasterCategories::where('slug',$slug)->first();
        if($slug && $category){
            $data['_title'] = $category->name;
            $data['categories'] = MasterCategories::select('name','id','slug')->where('is_deleted','0')->orderby('sort','asc')->get();
            $data['list']   = ProductModel::where('category',$category->id)->with('_category')->orderby('name','asc');
            return view('web.product.category')->with($data);
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

        $data['name'] = $rec->name;
        $data['email'] = $rec->email;
        $data['mobile'] = $rec->phone;
        $data['subject'] = $rec->subject;
        $data['message'] = $rec->message;
        $body = view('emails.inquiry',$data)->render();
        PMailer::send(CommonHelper::setting('mail_notification_email'),'Inquiry - '.$rec->subject,$body);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect('contact-us');
    }

    public function businessSave(Request $rec){
        
        ContactEnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'phone'  => $rec->phone,
            'subject'  => $rec->subject,
            'description'  => $rec->message,
        ]);

        $data['name'] = $rec->name;
        $data['email'] = $rec->email;
        $data['mobile'] = $rec->phone;
        $data['subject'] = $rec->subject;
        $data['message'] = $rec->message;
        $body = view('emails.inquiry',$data)->render();
        PMailer::send(CommonHelper::setting('mail_notification_email'),'Inquiry - '.$rec->subject,$body);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect('business-enquiry');
    }

    public function enquiry(Request $rec){
        
        ProductEnquiryModel::create([
            'name'  => $rec->name,
            'email'  => $rec->email,
            'phone'  => $rec->phone,
            'subject'  => $rec->subject,
            'description'  => $rec->message,
        ]);

        $data['name'] = $rec->name;
        $data['email'] = $rec->email;
        $data['mobile'] = $rec->phone;
        $data['subject'] = $rec->subject;
        $data['message'] = $rec->message;
        $body = view('emails.inquiry',$data)->render();
        PMailer::send(CommonHelper::setting('mail_notification_email'),'Inquiry - '.$rec->subject,$body);

        Session::flash('success', 'Enquiry Sent');
	    return Redirect::back();
    }
    
}
