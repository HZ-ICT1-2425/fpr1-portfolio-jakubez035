<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function blog(): \Illuminate\View\View
    {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }

    /**
     * @param $uri
     * @return Factory|View|Application
     */
    public function show($uri)
    {
        $blog = Blog::where('uri', $uri)->firstOrFail();
        return view('show-blog', compact('blog'));
    }
}
