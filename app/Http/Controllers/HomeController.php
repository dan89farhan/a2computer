<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    public function home()
    {
        return view('home.home');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function service()
    {
        return view('home.service');
    }
    public function about()
    {
        return view('home.about');
    }
    public function gallery()
    {
        return view('home.gallery');
    }
}
