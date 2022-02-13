@extends('layout')
@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->first ? 'mt-4' : '' }}">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
