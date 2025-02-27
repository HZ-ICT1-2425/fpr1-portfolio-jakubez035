@extends('layouts.main-layout')
@vite(['resources/css/faq.css'])

@section('body')
    <script>
        // Function to toggle visibility based on the answer ID
        function toggleAnswer(answerId) {
            const answerElement = document.getElementById(answerId);
            answerElement.classList.toggle('open'); // Toggle the 'open' class to show or hide the answer
        }
    </script>

    <h1 style="text-align: center; padding: 16px; font-weight: bold; font-size: 30px;">FAQ</h1>

    <!--Question 1-->
    <div class="faq-questions">
        <button onclick="toggleAnswer('answer')" class="faq-question-buttons">How can you print a document from your
            laptop at HZ?</button>
    </div>

    <div class="faq-answers">
        <p id="answer" class="slide-toggle">There are 2 options available <strong>web print</strong> and
            <strong>mobility print</strong>. With <strong>web print</strong>, you can print but not plot from all
            devices. With <strong>mobility print</strong> you can print and plot from all devices. Plotting is only
            possible with a Windows or Apple laptop.</p>
    </div>

    <!--Question 2-->
    <div class="faq-questions">
        <button onclick="toggleAnswer('answer-2')" class="faq-question-buttons">How can you scan a document and send it
            to your laptop at HZ?</button>
    </div>

    <div class="faq-answers">
        <p id="answer-2" class="slide-toggle">Log on to the printer using your HZ card or by entering your HZ user name
            and password. Choose the Scan option in the menu. Place the original(s) on the feeder or glass plate</p>
    </div>

    <!--Question 3-->
    <div class="faq-questions">
        <button onclick="toggleAnswer('answer-3')" class="faq-question-buttons">How can I buy something (like when I
            sign up for the IT introduction event) on the HZ web shop?</button>
    </div>

    <div class="faq-answers">
        <p id="answer-3" class="slide-toggle">Place your order via the Self Service Portal on MyHZ. That way, you will
            be helped quickly in the HZ Shop and your order will be processed with care.</p>
    </div>

    <!--Question 4-->
    <div class="faq-questions">
        <button onclick="toggleAnswer('answer-4')" class="faq-question-buttons">How can you book a project
            space?</button>
    </div>

    <div class="faq-answers">
        <p id="answer-4" class="slide-toggle">You can book a project space on <a
                href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=7e54d40b762c4dc79205e200f0d4d818&from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34">selfservice</a>!
            Just select the room and time you want.</p>
    </div>

    <!--Question 5-->
    <div class="faq-questions">
        <button onclick="toggleAnswer('answer-5')" class="faq-question-buttons">What are the instructions if you want to
            park your car at the HZ parking lot?</button>
    </div>

    <div class="faq-answers">
        <p id="answer-5" class="slide-toggle">The car park on Kousteendsedijk has a number of spaces for visitors, staff
            and students of Het Groene Woud. This car park is an 8-minte walk from the HZ. Upon showing your entry card,
            you can then get an exit card at the JRCZ service desk.</p>
    </div>

    <div style="height: 250px;"><div>
@endsection

