<!DOCTYPE html>
<html>

<head>
    <title>{{ $appName }} - {{ $appEnv }}</title>
</head>

<body>
    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>