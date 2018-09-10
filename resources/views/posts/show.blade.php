@extends('layouts.master')
@section('content')
<h1>{{ $post->title }}</h1>
{{ $post->body }}

<hr>
<h3 class="muted">Comments:</h3>

<div class="comments">
    <ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}:</strong> {{ $comment->body }}
        </li>
        @endforeach
    </ul>
</div>
@endsection
