@extends('layouts.main-layout')

@section('body')
    <section style="display: flex; align-items: center; justify-content: space-between;">
        <div style="width: 50%; text-align: center;">
            <h1 style="font-size: 60px; color: black; font-weight: bold; padding: 12px;">Hello! I'm Jakub Holík</h1>
        </div>
        <div style="width: 50%;">
            <img src="{{ asset('images/profile.png') }}" style="width: 100%; height: auto; object-fit: cover;" alt="My photo">
        </div>
    </section>
    <main>
        <section style="display: flex; justify-content: space-between;">
            <section style="width: 75%;">
                <p style="margin: 16px; font-size: 20px; text-align: justify;">
                    and I love pushing my limits. In programming language I would describe myself as a code that can always be more structured, look better, function better etc. I try to be better everyday wheter physically, mentally or emotionally. I don't like shortcuts or easy paths, I like discomfort, because that's what shapes us into better people. There's a quote I really love to use: "How you do one thing is how you do everything.", which basically means that no matter what you do, you should always do it on 100%, because if you half-ass it, what's stopping you from half-assing life.
                </p>
                <p style="margin: 16px; font-size: 20px; text-align: justify;">
                    Now for more information about myself. I'm from Slovakia, I attended Spanish grammar school for 8 years. I love mathematics and informatics, mainly for their logical nature. During the last 4 years of high school I recieved a complimentary diploma for great academic results every year and I graduated math in top 3% of students in Slovakia in the year 2024. In the year 2021 I participated in DofE and earned a brozne award and in the year 2022 I attended a Spanish language course in Salamanca, Spain for which I recieved a certificate. I've been actively going to the gym for more than 2,5 years and ran a few Spartan races ranging from 5k to 22km. As my other hobbies I enjoy learning the behavior of the stock market (mainly commodities) and playing video games with my friends from time to time.
                </p>
            </section>
            <div style="display: flex; flex-direction: column; margin: 16px; width: 25%; align-items: center; justify-content: center; font-size: 20px;">
                <h2 style="text-align: center; margin-bottom: 16px; font-weight: bold; font-size: 30px;">My attributes</h2>
                <ul style="list-style-type: disc; list-style-position: inside; text-align: left;">
                    <li>Determination</li>
                    <li>Thinking outside the box</li>
                    <li>Managing workload</li>
                    <li>Team communication</li>
                </ul>
            </div>
        </section>

    </main>
@endsection
