@extends('layouts/layout')
@section('content')

    <h1>Create a Post</h1>

    <hr>

    <form method="post" action="/posts">

        {{csrf_field()}}

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea type="text" class="form-control" id="body" placeholder="Body" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
            <a class="btn btn-danger" href="/posts">Cancel</a>
        </div>

       @include('layouts.error')

    </form>



@endsection