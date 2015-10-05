@extends('app')

@section('title')
    Write a new post
@stop

@section('content')
    <h1>Write a new post</h1>

    {!! Form::open(['url'=>'post']) !!}
    <div class="row">

        <div class="twelve columns">
            <div class="six columns offset-by-three moremargin">

                {!! Form::text('title',null, ['placeholder' => 'Title for your post', 'class'=>'u-full-width']) !!}
            </div>
        </div>
        <div class="twelve columns">
            <div class="six columns offset-by-three">
                {!! Form::textarea('body',null, ['placeholder' => 'What did you learn?', 'class'=>'u-full-width']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns">
            <div class="four columns offset-by-four">
                {!! Form::submit('Add Post', ['class'=>'button-primary u-full-width']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
@stop
