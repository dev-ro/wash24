<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function about() {
        return view('pages.about');
    }

    
    public function franchise() {
        return view('pages.franchise');
    }

    public function servicesEnq() {
        return view('pages.servicesEnq');
    }
}
