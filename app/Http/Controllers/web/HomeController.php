<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function home(){
        $data['_title'] = 'Home';
        return view('web.home')->with($data);
    }

    public function about(){
        $data['_title'] = 'About Us';
        return view('web.about')->with($data);
    }

    public function contact(){
        $data['_title'] = 'Contact Us';
        return view('web.contact')->with($data);
    }
}
