@extends('layouts.app', ['title' => 'Join'])
@section('content')
<section class="form-page"><form class="auth-card" method="POST" action="{{ route('register') }}">
    @csrf <div class="eyebrow">Become a member</div><h1>Create account</h1>
    <label>Name<input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"></label>@error('name')<p class="form-error">{{ $message }}</p>@enderror
    <label>Email address<input type="email" name="email" value="{{ old('email') }}" required autocomplete="email"></label>@error('email')<p class="form-error">{{ $message }}</p>@enderror
    <label>Password<input type="password" name="password" required autocomplete="new-password"></label>@error('password')<p class="form-error">{{ $message }}</p>@enderror
    <label>Confirm password<input type="password" name="password_confirmation" required autocomplete="new-password"></label><button class="button" type="submit">Create member account</button>
    <p class="form-footer">Already a member? <a href="{{ route('login') }}">Log in</a></p>
</form></section>
@endsection
