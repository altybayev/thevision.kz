<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
	/**
     * Show Index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('frontend.index');
    }

    /**
     * Show About Us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * Show Services page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('frontend.services');
    }

    /**
     * Show Contacts page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        return view('frontend.contacts');
    }
}
