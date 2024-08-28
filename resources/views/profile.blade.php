<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .profilecard{
            background-image: url(image/profilecard2.jpg);
            background-size: 50%; 
            background-repeat: repeat-x;
        }

        .profileimage{
            max-width: 100%;
            height: auto;
            border-radius: inherit;
        }
    </style>


</head>


<body>
    @extends('layout.mainLayout')
    @section('title', 'profile')
    @section('content')
    <div class="container" style="margin-top: 3%">
        <div class="row justify-content-center align-items-center">

            <div class="col-4">
                <div class="card text-center text-success profilecard rounded-5" style="height: 500px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-img-top rounded-circle mx-auto d-block border m-4"  style="width: 200px; height: 200px; ">
                        <img src="image/jaemin.jpg" alt="profile" class="profileimage">
                    </div>
                    <h1>{{$user->name}}</h1>
                    <div class="card-body border-top text-start text-success p-3 mt-3">
                        <h5>Email</h5>
                        <p>{{$user->email}}</p>
                        
                        <h5>Phone Number</h5>
                        <p>-</p>

                       
                    </div>

                    
                </div>
            </div>

            <div class="col-6">
                <div class="card" style="height: 500px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); position: relative;">
                    <div class="card-body">
                        <h3>About</h3>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ url('/session/logout') }}" class="btn btn-outline-success fw-semibold" style="background-color: #088395; border-radius: 20px; width: 120px; height: 50px; font-size: 16px; color: #FCFFD0;">Keluar</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    @endsection
</body>
</html>
</html>
