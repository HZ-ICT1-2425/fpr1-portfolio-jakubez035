<?php

namespace App\Http\Controllers;

use App\Models\Quarter;
use App\Models\Course;
use App\Models\Assessment;
use Illuminate\View\View;

class CourseController extends Controller
{
    /**
     * @return View
     */
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
