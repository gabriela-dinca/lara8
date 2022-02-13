@extends('layout')
@section('content')
    @foreach ($posts as $post)
        <article class="{{ $loop->first ? 'mt-4' : '' }}">
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>
                By <a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <p>{!! $post->excerpt !!}</p>
        </article>
    @endforeach
@endsection
