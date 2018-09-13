@extends('layouts.master')

@section('content')
<div class="col-md-8">
    <h1>Sign In</h1>

    @include('partials.errors')

    <form action="/login" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
</div>
@endsection
