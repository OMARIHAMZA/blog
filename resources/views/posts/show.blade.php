@extends('layouts/layout')

@section('content')
    <h1>{{$post -> title }}</h1>
    <small>{{$post -> created_at}}</small>
    <p>{{$post -> body}}</p>

    <hr>
    <h1 style="margin-top: 40px">Comments</h1>
    @if(count($post->comments))
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <p>{{$comment->body}}</p>
                    <small>{{$comment->created_at->diffForHumans()}}</small>
                </li>
            @endforeach
        </ul>
    @else
        <h3>No Comments yet.</h3>
    @endif

    <div class="card" style="margin-top: 50px">
        <div class="card-body">
            <form method="post" action="/posts/{{$post -> id}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" placeholder="Aa...." class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Add Comment</button>
                </div>
            </form>

            @include('layouts/error')

        </div>
    </div>

@endsection
