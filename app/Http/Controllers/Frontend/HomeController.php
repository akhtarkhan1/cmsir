<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function crewSchedule()
    {
        return view('frontend.pages.crewSchedule');
    }

    public function crewStatus()
    {
        return view('frontend.pages.crewStatus');
    }

    public function training()
    {
        return view('frontend.pages.training');
    }

    public function vacation()
    {
        return view('frontend.pages.vacation');
    }

    public function medical()
    {
        return view('frontend.pages.medical');
    }

    
    public function photoGallery()
    {
        return view('frontend.pages.photogallery');
    }

    
}
