<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Course;
use App\Models\Quarter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\CourseController;

class DashboardSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(){
        // Mass insert Quarters
        Quarter::insert([
            ['name' => 'Quartile 1: Introduction to Computer Science'],
            ['name' => 'Quartile 2: Game Development'],
            ['name' => 'Quartile 3: Introduction to frameworks and databases'],
            ['name' => 'Quartile 4: Modern Software Development']
        ]);

            // Mass insert Courses
        Course::insert([
            ['name' => 'Program & Career Orientation (PCO)', 'quarter_id' => 1],
            ['name' => 'Programming Basics (PB)', 'quarter_id' => 1],
            ['name' => 'Computer Science Basics (CSB)', 'quarter_id' => 1],
            ['name' => 'Object-Oriented Programming', 'quarter_id' => 2],
            ['name' => 'Framework project 1', 'quarter_id' => 3],
            ['name' => 'Framework project 2', 'quarter_id' => 4],
            ['name' => 'Business IT Consultancy Basics', 'quarter_id' => 4],
            ['name' => 'Personal Professional Development (PPD-E)', 'quarter_id' => 4],
            ['name' => 'IT Personality', 'quarter_id' => 4]
        ]);

            // Mass insert Assessments
        Assessment::insert([
            ['title' => 'Interview', 'course_id' => 1, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'Exam', 'course_id' => 2, 'condition' => 'Pending', 'points' => 5.00],
            ['title' => 'Exam', 'course_id' => 3, 'condition' => 'Pending', 'points' => 5.00],
            ['title' => 'Group project', 'course_id' => 4, 'condition' => 'Pending', 'points' => 5.00],
            ['title' => 'Exam', 'course_id' => 4, 'condition' => 'Pending', 'points' => 5.00],
            ['title' => 'Framework exam', 'course_id' => 5, 'condition' => 'Pending', 'points' => 4.00],
            ['title' => 'Database exam', 'course_id' => 5, 'condition' => 'Pending', 'points' => 1.00],
            ['title' => 'Group project', 'course_id' => 5, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'Individual portfolio', 'course_id' => 5, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'Presentation', 'course_id' => 6, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'Report', 'course_id' => 6, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'IT Portfolio', 'course_id' => 6, 'condition' => 'Pending', 'points' => 5.00],
            ['title' => 'Video', 'course_id' => 7, 'condition' => 'Pending', 'points' => 2.50],
            ['title' => 'Interview', 'course_id' => 8, 'condition' => 'Pending', 'points' => 12.50],
            ['title' => 'Project week', 'course_id' => 9, 'condition' => 'Pending', 'points' => 1.25],
            ['title' => 'International week', 'course_id' => 9, 'condition' => 'Pending', 'points' => 1.25],
        ]);
    }
}
