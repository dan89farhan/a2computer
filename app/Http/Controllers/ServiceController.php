<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ServiceController extends BaseController
{
    public function Computer()
    {
        return view('Services.Computer');
    }
    public function InstallSoftware()
    {
        return view('Services.InstallSoftware');
    }
    public function RemoteService()
    {
        return view('Services.RemoteService');
    }
    public function CCTV()
    {
        return view('Services.CCTV');
    }
}
