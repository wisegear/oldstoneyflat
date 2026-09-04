@extends('layouts.app', ['title' => 'Log in'])
@section('content')
<section class="form-page"><form class="auth-card" method="POST" action="{{ route('login') }}">
    @csrf <div class="eyebrow">Welcome back</div><h1>Log in</h1>
    <label>Email address<input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email"></label>@error('email')<p class="form-error">{{ $message }}</p>@enderror
    <label>Password<input type="password" name="password" required autocomplete="current-password"></label>@error('password')<p class="form-error">{{ $message }}</p>@enderror
    <label class="checkbox"><input type="checkbox" name="remember" value="1"> Remember me</label><button class="button" type="submit">Log in</button>
    <p class="form-footer">New here? <a href="{{ route('register') }}">Create a member account</a></p>
</form></section>
@endsection
