<?php

namespace App\Http\Controllers;
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
}
