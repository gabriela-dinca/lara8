@extends('layout')
@section('content')
    <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <article>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/">Go Back</a>
@endsection

