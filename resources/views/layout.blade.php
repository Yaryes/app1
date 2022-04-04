<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <ul>
        <li><a href="/"></a>HOME</li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/contact">CONTACT</a></li>
        <li><a href="/portfolio">PORTFOLIO</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>