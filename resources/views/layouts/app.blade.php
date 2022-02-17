<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark text-white border-bottom">
        <h1 style="font-size: 30px;">Vladik.ru</h1>
        <div class="btn btn-warning d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <nav>
                @auth("web")
                    <a href="/auth/logout" class="p-2 text-black text-decoration-none">Quit</a>
                @endauth

                @guest("web")
                    <a href="/auth/login" class="p-2 text-black text-decoration-none">Autorisation</a> |
                    <a href="/auth/register" class="p-2 text-black text-decoration-none">Registration</a>
                @endguest
            </nav>
        </div>
    </div>

    <div class="container">
            @yield('content')
    </div>

</body>
</html>
