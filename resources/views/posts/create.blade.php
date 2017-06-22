@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>

    <h1 class="text-center">Create Post</h1>
    
    {!! Form::open(['action' => 'PostController@store','method' => 'post', 'class' => 'col-sm-8 col-sm-offset-2']) !!}
    
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title ...']) }}
        </div>

         <div class="form-group">
            {{ Form::label('title', 'Body')}}
            {{ Form::textarea('body', '', ['id' => 'article-ckeditor' ,'class' => 'form-control', 'placeholder' => 'Enter Body ...']) }}
        </div>

        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection