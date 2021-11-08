
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Aprendible')</title>
</head>
<body>
    <nav>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portafolio">Portafolio</a></li>
        <li><a href="/contacto">Contacto</a></li>



    </nav>
    @yield('content')
</body>
</html>
