@extends('layouts.main-layout')
@vite('resources/css/show-blog.css')

@section('body')
    @include('partials.nav')
    @include('partials.sidenav')

    <h1>{{ $blog->title }}</h1>
    <p><strong>Published by:</strong> {{ $blog->author}}</p>
    <div>
        {!! nl2br(e($blog->content)) !!}
    </div>

    @include('partials.footer')
@endsection
