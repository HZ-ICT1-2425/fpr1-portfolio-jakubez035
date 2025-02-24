<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Quarter;
use App\Models\Assessment;
use App\Models\Blog;

class StaticContentController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * @return View
     */
    public function profile(): View
    {
        return view('profile');
    }

    /**
     * @return View
     */
    public function faq(): View
    {
        return view('faq');
    }
}
