@extends('layouts.master')
@section('content')
    @include('partials.errors')
<div class="col-sm-8">
    <h1>Register</h1>

    <form action="/register" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required minlength="8">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required minlength="8">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>

    </form>
</div>
@endsection
