<aside class="sidenav">
    <div>
        @php
            $sideNavItems = [
                'MyHZ' => 'https://portal.hz.nl/en/',
                'Learn' => 'https://learn.hz.nl/my/',
                'HBO-ICT CER' => 'https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#111-course-and-examination-regulations',
                'HBO-ICT IR' => 'https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754#112-implementation-regulations',
                'GitHub' => 'https://github.com/HZ-HBO-ICT'
            ];
        @endphp

        @foreach ($sideNavItems as $name => $link)
            <a href="{{ $link }}" target="_blank">{{ $name }}</a>
        @endforeach
    </div>

    <div>
        <a href="https://hz.nl/" target="_blank">
            <img src="{{ asset('images/hz-logo.png') }}" alt="HZ Logo">
        </a>
    </div>
</aside>


