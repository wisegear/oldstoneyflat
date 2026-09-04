<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Old Stoney Flat, a welcoming holiday flat in Stonehaven, Aberdeenshire.">
    <title>{{ isset($title) ? $title.' | ' : '' }}Old Stoney Flat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body><div class="site-shell">
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}" aria-label="Old Stoney Flat home"><span class="brand-mark">OS</span><span><strong>Old Stoney Flat</strong><small>Stonehaven · Scotland</small></span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-menu">Menu</button>
        <nav id="main-menu" class="main-menu" aria-label="Main navigation">
            <a @class(['active' => request()->routeIs('home')]) href="{{ route('home') }}">Home</a>
            <a @class(['active' => request()->routeIs('about')]) href="{{ route('about') }}">About</a>
            @auth
                @if(auth()->user()->isAdministrator())<a @class(['active' => request()->routeIs('admin.*')]) href="{{ route('admin.dashboard') }}">Admin</a>@endif
                <form method="POST" action="{{ route('logout') }}">@csrf<button type="submit">Log out</button></form>
            @else
                <a @class(['active' => request()->routeIs('login')]) href="{{ route('login') }}">Log in</a><a class="nav-cta" href="{{ route('register') }}" hidden>Join</a>
            @endauth
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer class="site-footer"><p>Old Stoney Flat · Stonehaven, Aberdeenshire</p><p>&copy; {{ date('Y') }} oldstoneyflat.scot</p></footer>
</div></body>
</html>
