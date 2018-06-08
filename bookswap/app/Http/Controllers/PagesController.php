<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('pages.main');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about');
    }

    public function register()
    {
        return view('pages.register');
    }
    public function login()
    {
        return view('pages.login');
    }
    public function logout()
    {
        return view('auth.logout');
    }

    public function privacyPolicy()
    {
        return view('pages.privacyPolicy');
    }

}
