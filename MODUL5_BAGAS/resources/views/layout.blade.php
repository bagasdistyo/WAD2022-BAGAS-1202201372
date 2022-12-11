<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 5 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav" style="padding-left: 100px;">
                    <a style="color: white;" class="nav-link active" aria-current="page"
                        href="">Home</a>
                    <a class="nav-link" style="padding-left: 35px; padding-right:900px;color: white;" 
                        href="">MyCar</a>';
                </div>
                <a class="btn btn-light" style="font-color:blue;" role="button"
                    href="/product/create">Add Car</a>
                <div class="dropdown" style="padding-left: 30px;">
                    <a class="btn btn-light dropdown-toggle" style="font-color:blue;" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Bagas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>