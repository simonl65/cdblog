@extends('layouts.master')

@section('content')

<h1>Create a Post</h1>

@include('partials.errors')

<form method="POST" action="/posts">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control {{( $errors->first('title') ) ? 'is-invalid' : ''}}" id="title" name="title" aria-describedby="titleHelp" value="{{old('title')}}">
        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>

    <div class="form-group">
        <label for="body">Post body</label>
    <textarea class="form-control {{( $errors->first('body') ) ? 'is-invalid' : ''}}" id="body" name="body" rows="10">{{old('body')}}</textarea>
        @if ($errors->has('body'))
            <span class="text-danger">{{ $errors->first('body') }}</span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    <div class="form-group">
    </div>
</form>

@endsection
