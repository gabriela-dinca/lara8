@extends('layout')
@section('content')
    <p> By <a href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a>
        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/">Go Back</a>
@endsection

