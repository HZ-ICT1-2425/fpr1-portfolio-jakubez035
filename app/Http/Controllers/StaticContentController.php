<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class StaticContentController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function profile(): View
    {
        return view('profile');
    }

    public function faq(): View
    {
        return view('faq');
    }

    public function dashboard(): View
    {
        return view('dashboard');
    }
}
