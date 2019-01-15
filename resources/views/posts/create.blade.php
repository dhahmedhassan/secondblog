@extends('layouts.master')

@section('content')
        <h1>Create a Post</h1>

        <hr>

        <form action="/posts" method="post">
            {{ csrf_field() }}
        
            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title Here" aria-describedby="titleId" maxlength="60">
                <small id="titleId" class="text-muted">Title for the Post</small>
            </div>

            <div class="form-group">
              <label for="body">Post Body</label>
              <textarea class="form-control" name="body" id="body"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>

@endsection
