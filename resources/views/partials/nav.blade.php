<nav class="navbar">
    <button class="menu-icon" onclick="toggleNav()">JH</button>

    <ul>
        @php
            $navItems = [
                'Home' => url('/'),
                'Profile' => url('/profile'),
                'Dashboard' => url('/dashboard'),
                'FAQ' => url('/faq'),
                'Blog' => url('/blog')
            ];
        @endphp

        @foreach ($navItems as $name => $link)
            <li>
                <a href="{{ $link }}" class="{{ request()->is(trim($link, '/')) ? 'active' : '' }}">
                    {{ $name }}
                </a>
            </li>
        @endforeach
    </ul>

    <script>
        function toggleNav() {
            const nav = document.querySelector(".sidenav");
            nav.style.transform = (nav.style.transform === "translateX(0%)") ? "translateX(-100%)" : "translateX(0%)";
        }
    </script>
</nav>
