@extends('app')

@section('content')
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <p>{{ $post->school }}</p>
@stop
