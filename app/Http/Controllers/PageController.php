<?php

namespace App\Http\Controllers;
use Mail; 
use Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PageController extends BaseController
{
    public function Home()
    {
        return view('Pages.Home');
    }
    public function Gallery()
    {
        return view('Pages.Gallery');
    }
    public function Contact()
    {
        return view('Pages.Contact');
    }
    public function AboutUs()
    {
        return view('Pages.AboutUs');
    }
    public function Services()
    {
        return view('Pages.Services');
    }
    public function Query()
    {
        return view('Pages.Query');
    }
    public function SendMail(Request $request)
    {
		$data = array(
            'Category' =>Request::input('cate'), 
            'SubCategory' =>Request::input('subcate'), 
            'Name' =>Request::input('name'),
            'Email'=>Request::input('email'),
            'Message' =>Request::input('message')
        );
        Mail::send('Temp', $data, function($message) {
            $message->to('khanjavedhero@gmail.com', 'Hero')->subject('New Query');
            $message->from('user@gmail.com','user');
        });
		return view('Pages.Home');
    }
    
}
