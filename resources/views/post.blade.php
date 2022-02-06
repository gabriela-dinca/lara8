@extends('layout')
@section('content')
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/">Go Back</a>
@endsection
