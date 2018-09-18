@extends('layouts/layout')
@section('content')
    @foreach($posts as $post)
        <a href="/posts/{{$post->id}}"><h1>{{$post->title}}</h1></a>
        <small>{{$post->created_at->toFormattedDateString()}}</small>
        <p style="margin-top: 20px">{{$post->body}}</p>
        <hr>
    @endforeach
    <a class="btn btn-primary" href="/posts/create">Create Post</a>
@endsection