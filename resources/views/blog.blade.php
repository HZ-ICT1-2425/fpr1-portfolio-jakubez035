@extends('layouts.main-layout')
@vite('resources/css/blog.css')

@section('body')
    @include('partials.nav')
    @include('partials.sidenav')

    <main>
        @foreach ($blogs as $blog)
            <a href="{{ route('show-blog', ['id' => $blog->id]) }}" style="text-decoration: none; color: black;">
                <section>
                    <div class="zoom-in">
                        <img class="blog-image" src="{{ $blog->image }}" alt="{{ $blog->title }}">
                    </div>
                    <h1 class="blog-names">{{ $blog->title }}</h1>
                </section>
            </a>
        @endforeach
    </main>

    <div style="height: 100px;"></div>
    @include('partials.footer')
@endsection
