<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Quarter;
use App\Models\Assessment;

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
        // Fetches all quarters with related data (courses and assessments in this case)
        $quarters = Quarter::with('courses.assessments')->get();

        // Fetches all the credits from the passed assessments
        $totalCredits = Assessment::where('condition', 'Passed')->sum('points');

        // Pass the data to the dashboard and reroute to the dashboard.blade.php
        return view('dashboard', compact('quarters', 'totalCredits'));
    }
}
