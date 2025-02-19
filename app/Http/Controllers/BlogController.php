<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     *
     */
    public function addMassData()
    {
        // Mass insert Quarters
        Blog::insert([
            ['title' => 'My Study Choice Journey',
                'image' => 'https://www.oxfordscholastica.com/wp-content/uploads/2023/07/cambridge-college.jpg',
                'author' => 'Jakub',
                'content' => "I think that choosing the right study is important, because it will affect a big part of your life. You have to be very careful, because you don’t want to be stuck doing something you hate. That’s why I’m giving some of my advice on what I did to be sure I chose the right program and what keeps me going.

                **Study Choice Activities**
                To be honest, I was really sure about my program choice as programming has been my hobby for a few years. That didn’t stop me from doing proper research and solidifying my mind. To help with this, I called some of my friends who study in the Netherlands to get to know what it’s like living in a foreign country, what mental load they have to deal with, etc.

                For the specific program, I talked with students who had already gone through at least part of it. We discussed their mistakes and how they could have prepared better, so I’d be more ready to tackle the study year. I also talked about the program with HZ representatives at a university conference, and I did a career choice test at my school.

                **Why I’m Interested in Programming**
                I’m interested in programming because I enjoy problem-solving and a little challenge. Thinking outside the box is what I love, even more so when I can't figure out a solution and it keeps me up all night. I like the feeling of dopamine when I finally figure it out and learn something new that I can implement when I face future challenges or life obstacles.

                **After Completing My Studies**
                After finishing my studies, I hope to have learned better ways to identify the problems I'm facing and how to dissect them into smaller fragments. This way, I can find different ways of solving them through various perspectives.

                Programming, to me, is like learning a new language — it's just about repetition. However, problem-solving is the core component of programming, and that’s something I can only improve through practice."],
            ['title' => 'Personal SWOT Analysis',
                'image' => 'https://www.gliffy.com/sites/default/files/image/2020-07/image-blog-comprehensive-guide-to-swot-analysis.jpg',
                'author' => 'Jakub',
                'content' => "
                A SWOT analysis helps you identify strengths, weaknesses, opportunities, and threats for a specific project or your overall business plan. It’s used for strategic planning and to stay ahead of market trends. Below, we describe each part of the SWOT framework and show you how to conduct your own.

                **Why is it Important?**
                A SWOT analysis can help you improve processes and plan for growth. While similar to a competitive analysis, it differs because it evaluates both internal and external factors. Analyzing key areas around these opportunities and threats will equip you with the insights needed to set your team up for success.

                A SWOT analysis isn’t only useful for organizations. With a personal SWOT analysis, you can examine areas of your life that could benefit from improvement, from your leadership style to your communication skills. These are the benefits of using a SWOT analysis in any scenario.

                **My SWOT Analysis**
                **Strengths:** Focus and determination in learning new skills. I believe that when you fail, you are presented with an opportunity to learn, analyze your mistakes, and improve. The only way to truly fail is to give up.
                **Weaknesses:** Waking up for classes and taking advice that could prevent a mistake or failure. I often like to do things my way, which sometimes causes unnecessary setbacks.
                **Opportunities:** Opportunities to develop new skills and gain new perspectives. I want to be challenged.
                **Threats:** Sometimes I take on too much to prove that things aren’t as hard as people claim. My goal during my stay here is to avoid overwhelming myself and instead ease into it, taking things one step at a time.

                **What to Do with the Results?**
                Once you've completed a SWOT analysis, use the results as a decision-making aid. It can help prioritize actions, develop strategic plans that play to your strengths, improve weaknesses, seize opportunities, and counteract threats. It’s a useful tool for setting objectives and creating a roadmap for achieving them.

                **Source**
                For more information about SWOT analysis, visit the resource here: SWOT Analysis on Asana."],
            ['title' => 'Programming Experience',
                'image' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80',
                'author' => 'Jakub',
                'content' => "Something"],
            ['title' => 'First Feedback',
                'image' => 'https://www.thoughtco.com/thmb/GIX4lTvaWbEggNYVD4JjQaILCSc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Pen-writing-notes-studying1-1ea151f6ac76428aa5f7d0c2fd245927.jpg',
                'author' => 'Jakub',
                'content' => "Something"],
            ['title' => 'What It Means to Be a Data Analyst',
                'image' => 'https://www.theforage.com/blog/wp-content/uploads/2023/02/data-analyst.jpg',
                'author' => 'Jakub',
                'content' => "Something"],
        ]);
    }

    public function show($id)
    {
        // Find the blog post by ID
        $blog = Blog::findOrFail($id);
        return view('show-blog', compact('blog'));
    }
}
