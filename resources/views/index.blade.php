@extends('layouts.main-layout')
@vite(['resources/css/home.css', 'resources/js/homepageimages.js'])

@section('body')
    <section class="image-section">
        <div class="welcome-container">
            <img id="welcomeImage" src="https://www.chromethemer.com/download/hd-wallpapers/galaxy-3840x2160.jpg" alt="Welcome Image">
            <img id="welcomeImage2" src="https://images.unsplash.com/photo-1502134249126-9f3755a50d78?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D" alt="Welcome Image">
            <div class="welcome-text">
                <h1 class="main-title">- How do you call a person that used to be fat? <br> - ExFAT!</h1>
            </div>
        </div>
    </section>

    <main>
        <section class="info-section">
            <article>
                <h1>Why ICT?</h1>
                <p>A lot of people usually choose ICT field, because it
                    pays well and I'm not different. Since I was a little kid I always wanted to make a lot of money, so
                    I could buy expensive cars and travel all over the world. I've always been trying to find ways to
                    earn money or to invest money. Well why didn't you choose business then? That's a good question. I
                    haven't chosen business, because I find it too monotonous. You learn different strategies and
                    methods you can apply, but there's not much of problem solving and logical thinking, which I think
                    is more important in todays world. And if for whatever reason I failed with my business, I will
                    always have the knowledge of programming I can apply in the world and earn a pretty large sum of
                    money.</p>
            </article>
            <article>
                <h1>Logical obstacles</h1>
                <p>As I mentioned earlier ICT comes with a great dose of
                    problem solving and logical thinking which I love. Ranging from real life problems through math to
                    programming, there are problems everywhere and I can't say no to them. During my high school years
                    math and informatics were my passion and they still are. They taught me a lot about ways you can
                    approach a problem, see different perspectives, research and learn. The problems I couldn't figure
                    out were the best, because the more time and effort it took me to find a solution, the better the
                    feeling of accomplishment was. I believe ICT can expand on these skills and yet again show me a
                    different perspective along with a new skillset.</p>
            </article>
        </section>
    </main>

    <div class="bg-section">
        <div>
            <h2>ICT includes</h2>
            <ul>
                <li>Web development</li>
                <li>Game development</li>
                <li>Database creation</li>
                <li>Problem-solving exercises</li>
            </ul>
        </div>
    </div>
@endsection
