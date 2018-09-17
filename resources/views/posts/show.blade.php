@extends('layouts.master')
@section('content')
<h1>{{ $post->title }}</h1>
{!! $post->body !!}

<hr> {{-- Show any comments --}}
<h3 class="text-muted">Comments:</h3>

<div class="comments">
    @if(count($post->comments))
    <ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}:</strong> {{ $comment->body }}
        </li>
        @endforeach
    </ul>
    @else
    <p class="">No comments yet.</p>
    @endif
</div>

{{-- Show comments form --}}
<hr>
@include('partials.errors')

<form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    <div class="form-group">
        <textarea name="body" id="body" rows="5" class="form-control" placeholder="Your comment here.">{{ old('body') }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
    </div>
</form>
@endsection
