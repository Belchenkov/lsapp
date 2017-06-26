@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    @if (!empty($post))
        <h1>{{ $post->title }}</h1>
        <hr>
        
        <img style="width:100%" src="/storage/cover_images/{{ $post->cover_image }}" alt="{{ $post->cover_image }}">

        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Written on - {{ $post->created_at }} by {{$post->user->name}}</small>
        <hr>

        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'post', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        @endif
    @else
        <p>Post Not found</p>
    @endif

@endsection