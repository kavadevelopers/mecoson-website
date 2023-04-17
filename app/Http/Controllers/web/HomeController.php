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
}
