@extends('app')

@section('content')
    <h1>Posts</h1>

    @foreach($posts as $post)
        <article>
            <h2>
                <a href= {{ action('PostController@show', [$post->id]) }}>{{ $post->title }}</a>
            </h2>
            <p>{{ $post->body }}</p>
        </article>
    @endforeach
@stop
