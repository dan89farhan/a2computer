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
        dd($request);

        var_dump($request);

        print_r($request);
        
        $data = array(
            'Category' => $request->Cate , 
            'SubCategory' => $request->SubCate, 
            'Name' => $request->name, 
            'Email'=> $request->email,
            'Subject' => $request->subject, 
            'Message' => $request->message
        );
        Mail::send(['text'=> 'Pages.Temp'], $data, function($message) {
            $message->to('khanjavedhero@gmail.com', 'Jon Doe')->subject('Welcome to the Laravel 4 Auth App!');
            $message->from('khanjavedhero@gmail.com','javed');
        });
    }
    
}
