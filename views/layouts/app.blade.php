<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', $appName ?? 'My App')</title>
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body>
    <nav style="background:#007bff; padding:1rem; color:white;">
        <div class="container">
            <a href="/" style="color:white; font-weight:bold; text-decoration:none;">{{ $appName ?? 'My App' }}</a>
            <ul style="list-style:none; display:inline-block; margin-left:20px;">
                <li style="display:inline; margin-right:15px;"><a href="/" style="color:white;">Home</a></li>
                <li style="display:inline; margin-right:15px;"><a href="/about" style="color:white;">About</a></li>
                <li style="display:inline; margin-right:15px;"><a href="/contact" style="color:white;">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main class="container" style="padding: 20px;">
        @yield('content')
    </main>

    <footer class="bg-light py-3 text-center mt-4 text-muted">
        &copy; {{ date('Y') }} {{ $appName ?? 'My App' }}. All rights reserved.
    </footer>
    @yield('script')
</body>

</html>