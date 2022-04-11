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

    public function locoPilot()
    {
        return view('frontend.pages.locoPilot');
    }

    public function assistantLocoPilot()
    {
        return view('frontend.pages.assistantLocoPilot');
    }

    public function guard()
    {
        return view('frontend.pages.guard');
    }

    public function shunters()
    {
        return view('frontend.pages.shunters');
    }
    

    public function trainTypes()
    {
        return view('frontend.pages.trainTypes');
    }
    

    public function trainParts()
    {
        return view('frontend.pages.trainParts');
    }
    
    

    
}
