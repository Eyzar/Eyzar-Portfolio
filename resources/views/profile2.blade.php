@extends('layout.mainLayout')
@section('title', 'profile')
@section('content')

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

        .HeroIcon{
            max-width: 80%;
            height: 60px;
        }

        a{
            text-decoration: none;
            color: inherit;
        }
        
</style>

<div class="Container-md col-md-6 mt-5 p-3" style="margin: auto;" >
    <div class="col justify-content-center align-items-center">
        
        <div class="card text-center text-success profilecard rounded-5" style="height: 700px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            
            <div class="card-img-top rounded-circle mx-auto d-block border m-4"  style="width: 200px; height: 200px; ">
                <img src="image/profile2.jpg" alt="profile" class="profileimage">
            </div>

            
            <h1>{{$user->name}}</h1>
            <h5>{{$user->email}}</h5>
            {{-- Detail --}}
            <div class="container border-top row text-start">
                <div class="col-md-7 p-3 border-end">
                    <h5>Nomor Telepon</h5>
                    <p>{{$user->nomor_telepon !== NULL ? $user->nomor_telepon : '------'}}</p> 
                    <h5>Tanggal Lahir</h5>
                    <p>{{$user->tanggal_lahir !== NULL ? $user->tanggal_lahir : '------'}}</p>
                    <h5>Jenis Kelamin</h5>
                    <p>{{$user->jenis_kelamin !== NULL ? $user->jenis_kelamin : '------'}}</p>
                    <h5>Cita-Cita</h5>
                    <p>{{$user->cita_cita !== NULL ? $user->cita_cita : '------'}}</p>
                </div>

                <div class="col-md-5 p-3 column text-light rounded-end-5" style="background-color: rgb(22, 145, 108)">
                    <a href="">
                        <div class="col row align-items-center py-2">
                            <div class="col-3 ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-2 h-2 HeroIcon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </div>
                            <div class="col">        
                                <h5> Edit Profile</h5>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="col row align-items-center mt-3 py-2 border-top">
                            <div class="col-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-2 h-2 HeroIcon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                                </svg>
                            </div>
                            <div class="col">        
                                <h5> Hapus Akun</h5>
                            </div>
                        </div>
                    </a>
                    
                    <a href="/session/logout">
                    <div class="col row align-items-center mt-3 py-2 border-top">
                        
                        <div class="col-3 ">                              
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-2 h-2 HeroIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                            </svg>   
                        </div>
                        <div class="col">        
                            <h5> Keluar</h5>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container EditProfileSection border">
    <div class="col md-8 p-5">
        <h3>Edit Profile</h3>
        <form action="" class="mt-3">
            <div class="">
                <label for="Name">Name</label>
                <input type="text">
            </div>
        </form>
    </div>
</div>
@endsection