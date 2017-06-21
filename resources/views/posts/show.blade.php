@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    @if (!empty($post))
        <h1>{{ $post->title }}</h1>
        <div>
            {{ $post->body }}
        </div>
        <hr>
        <small>Written on - {{ $post->created_at }}</small>
    @else
        <p>Post Not found</p>
    @endif

@endsection