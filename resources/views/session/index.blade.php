<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Masuk</title>

    
    
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/image/logo.png" alt="logo" width="75" height="40">
            </a>
            <img src="/image/topright.png" alt="Top Right Image" class="top-right-image">
        </div>
    </nav>
    <div class="center-container rounded px-3 py-3 mx-auto">
        <div class="text-center">
            <h1>Masuk</h1>
            <p>Halo selamat datang kembali!</p>
            @if($errors->has('loginError'))
                <div class="alert alert-danger">
                    {{ $errors->first('loginError') }}
                </div>
            @endif
        </div>

        <form action="/session/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control custom-input">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" name="password" class="form-control custom-input">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>   
            <div class="mb-2 d-flex justify-content-between align-items-center">
                <p style="color: #071952; font-weight: bold; font-size: 12px;">Tidak punya akun? <a href="/session/register" style="color: #071952; font-weight: bold; font-size: 12px;">Daftar disini</a></p>
            </div>
            <div class="mb-2 d-grid">
                <button name="submit" type="submit" class="custom-button">Masuk</button>
            </div>        
        </form>
    </div>
    <footer>
        <img src="/image/Wave.png" alt="Footer Image" class="img-responsive">
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
