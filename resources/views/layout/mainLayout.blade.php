<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/course.css') }}">   
    
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar bg-body-white">
        <div class="container d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="{{URL('image/logo.png')}}" alt="logo" width="75" height="40">
            </a>
            <ul class="nav nav-underline d-flex align-items-center">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" style="color: #088395;" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" style="color: #088395;" href="/course">Mata Pelajaran</a>
                </li>
                {{-- blm ada menu logout jd nnti disesuain lg aja dmn letaknya, ini buat testion log out berhasil apa engga --}}
                <li class="nav-item">
                    <a class="nav-link fw-semibold" style="color: #088395;" href="/profile">Profile</a>
                </li>
            </ul>
            <form class="d-flex align-items-center" role="search">
                <input class="form-control me-2" style="border-radius: 20px; border: 1.5px solid #071952; height: 30px; font-size: 12px; background-color: #FCFFD0;" type="search" placeholder="Tuliskan disini" aria-label="Search">
                <button class="btn btn-outline-success fw-semibold" type="submit" style="background-color: #088395; border-radius: 20px; height: 30px; font-size: 12px; color: #FCFFD0;">Cari</button>
            </form>
        </div>
    </nav>



   @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>