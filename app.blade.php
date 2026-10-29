<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'A creative studio website demonstrating Laravel Blade template inheritance.')">
    <title>@yield('title', 'Home') | Atelier Nova</title>
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    @yield('head')
</head>
<body class="theme-{{ $theme ?? 'ocean' }}">
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home', ['theme' => $theme ?? 'ocean']) }}" aria-label="Atelier Nova home">
                <span class="brand-mark" aria-hidden="true">N</span>
                <span class="brand-text">atelier<span>nova</span></span>
            </a>

            <nav class="main-nav" aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home', ['theme' => $theme ?? 'ocean']) }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about', ['theme' => $theme ?? 'ocean']) }}">About</a>
                <a href="{{ route('home', ['theme' => $theme ?? 'ocean']) }}#services">Services</a>
                <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact', ['theme' => $theme ?? 'ocean']) }}">Contact</a>
            </nav>

            <a class="header-cta" href="{{ route('contact', ['theme' => $theme ?? 'ocean']) }}">Start a project <span aria-hidden="true">↗</span></a>
        </div>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="footer-brand-block">
                <a class="brand footer-brand" href="{{ route('home', ['theme' => $theme ?? 'ocean']) }}">
                    <span class="brand-mark" aria-hidden="true">N</span>
                    <span class="brand-text">atelier<span>nova</span></span>
                </a>
                <p>Thoughtful design. Clear ideas. Digital experiences that feel human.</p>
            </div>

            <div class="footer-links">
                <h2>Explore</h2>
                <a href="{{ route('home', ['theme' => $theme ?? 'ocean']) }}">Home</a>
                <a href="{{ route('about', ['theme' => $theme ?? 'ocean']) }}">About us</a>
                <a href="{{ route('contact', ['theme' => $theme ?? 'ocean']) }}">Contact</a>
            </div>

            <div class="theme-picker-block">
                <h2>Try a theme</h2>
                <p>Change the accent colours across the whole website.</p>
                <form class="theme-form" method="GET" action="{{ url()->current() }}">
                    <label class="visually-hidden" for="theme-choice">Choose website theme</label>
                    <select id="theme-choice" name="theme">
                        <option value="ocean" {{ ($theme ?? 'ocean') === 'ocean' ? 'selected' : '' }}>Ocean blue</option>
                        <option value="sunset" {{ ($theme ?? 'ocean') === 'sunset' ? 'selected' : '' }}>Sunset coral</option>
                        <option value="forest" {{ ($theme ?? 'ocean') === 'forest' ? 'selected' : '' }}>Forest green</option>
                    </select>
                    <button type="submit" class="theme-submit">Apply</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© {{ date('Y') }} Atelier Nova Studio</span>
            <span>Built with Laravel Blade · Lab Work 4</span>
        </div>
    </footer>

    @yield('page_scripts')
</body>
</html>
