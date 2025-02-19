@extends('layouts.main-layout')
@vite(['resources/css/dashboard.css', 'resources/js/creditcalculator.js', 'resources/js/schoolyear.js'])

@section('body')
    @include('partials.nav')
    @include('partials.sidenav')
    <!--School year progress bar-->
    <h1 style="text-align: center; margin-top: 16px; font-weight: bold; font-size: 24px;">School year so far!</h1>
    <div style="width: 90%; margin-left: auto; margin-right: auto; padding: 16px;">
        <div style="background-color: #d1d5db; width: 100%; border-radius: 999px; height: 20px; position: relative; overflow: hidden;">
            <div id="progressIndicator" style="width: 0%; height: 100%; background-color: #22c55e;"></div>
        </div>
    </div>

    <!-- Progress Overview -->
    <div class="dashboard-tables">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 16px;">Study Monitor</h1>

        <div>
            <p  style="font-size: 18px; font-weight: 600;">Total Credits Earned: <span id="total-credits" style="color: #16a34a;">{{ number_format($totalCredits, 2) }}</span> / 60 EC</p>
            <p style="font-size: 14px;  color: #4b5563;">NBSA Boundary: 45 EC</p>
            <div style="width: 100%; background-color: #e5e7eb; border-radius: 999px; height: 20px; margin-top: 8px; overflow: hidden; ">
                <div style="width: 0%; background-color: #16a34a; height: 100%;" id="total-credits-progress-bar"></div>
            </div>
        </div>
    </div>

    @foreach ($quarters as $quarter)
        <div class="dashboard-tables">
            <h2 class="dashboard-tables-headings">{{ $quarter->name }}</h2>
            <div class="container">

                @foreach ($quarter->courses as $course)
                    <div class="dashboard-q1-tables">
                        <h3 class="dashboard-q1-tables-headings">{{ $course->name }}</h3>
                        <table>
                            <thead>
                            <tr>
                                <th>Test</th>
                                <th>Credits</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($course->assessments as $assessment)
                                <tr class="{{ strtolower($assessment->condition) === 'pending' ? 'table-pending' : (strtolower($assessment->condition) === 'failed' ? 'table-failed' : 'table-completed') }}">
                                    <td>{{ $assessment->title }}</td>
                                    <td>{{ $assessment->points }}</td>
                                    <td style="color: {{ strtolower($assessment->condition) === 'pending' ? 'orange' : (strtolower($assessment->condition) === 'failed' ? 'table-failed' : 'table-completed') }};">
                                        {{ ucfirst($assessment->condition) }}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    @endforeach

    @include('partials.footer')

@endsection
