@extends('layouts.master')

@section('content')

<h1>Create a Post</h1>

<form method="POST" action="/posts">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
        <small id="etitleHelp" class="form-text text-muted">Keep it short now!</small>
    </div>

    <div class="form-group">
        <label for="body">Post body</label>
        <textarea class="form-control" id="body" name="body" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Publish</button>
</form>
@endsection
