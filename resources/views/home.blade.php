@extends('layout.mainLayout')

@section('title', 'Edumate |  Home')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
   </div>
 @endif
 
<link rel="stylesheet" href="{{asset('css/home2.css')}}">
<link rel="stylesheet" href="{{asset('css/landing-page.css')}}">

<section class="hero-section pt-5 pb-5">
    <div class="container ct-1">
        <div class="hero-content mt-5">
            <span class="pb-2 fw-medium">E-Learning Media</span>
            <h1 class="pb-3">Belajar dimana saja kapan saja dengan EduMate</h2>
                <p class="pb-3">Nikmati pengalaman belajar yang menyenangkan dengan EduMate. Eksplorasi berbagai macam
                    materi sekolah dengan mudah dan dapatkan pengetahuan baru!</p>
                <div class="btn-group">
                    <a class="hero-btn" href="#Class">Eksplorasi</a>
                </div>
                <div class="student-parents-review mt-5">
                    <div class="customers-group">
                        <img src="../image/landing-page/avatar/Avatar 1.jpg" alt="Jimmy Hendric" class="customer-img">
                        <img src="../image/landing-page/avatar/Avatar 2.jpg" alt="Anya Sulitiawati"
                            class="customer-img">
                        <img src="../image/landing-page/avatar/Avatar 3.jpg" alt="Tom Cruise" class="customer-img">
                        <img src="../image/landing-page/avatar/Avatar 4.jpg" alt="Son Heung-min" class="customer-img">
                        <img src="../image/landing-page/avatar/Avatar 5.jpg" alt="Jenny Jubaedah" class="customer-img">
                    </div>
                    <p class="summary-review">Dipercaya lebih dari <span>150.000+</span> orang tua</p>
                </div>
        </div>
        <div class="hero-images-box">
            <div class="hero-ornament"></div>
            <div class="hero-ornament"><span>Study!</span></div>
            <img class="hero-img" src="../image/landing-page/hero-image.png" alt="Kids Cheering">
        </div>
    </div>
</section>

<div class="container text-center mt-3 p-2 border rounded-pill" id="Class">
    <h1>Mau belajar materi kelas berapa?</h1>
    <ul class="row justify-content-md-center mt-3">
            <li class="col"><button class="btn btn-light active">Kelas 1</button></li>
            <li class="col"><button class="btn btn-light">Kelas 2</button></li>
            <li class="col"><button class="btn btn-light">Kelas 3</button></li>
            <li class="col"><button class="btn btn-light">Kelas 4</button></li>
            <li class="col"><button class="btn btn-light">Kelas 5</button></li>
            <li class="col"><button class="btn btn-light">Kelas 6</button></li> 
    </ul>
</div>

<div class="container mt-3 p-4 rounded-5 border" id="SubjectData">
    
    <div class="column p-1" id="Subject">
        {{-- Subject Header --}}
            <h2 class="SubjectName">Matematika</h1>
                <div class="d-flex  align-items-center">
                    <div class="col-sm-11 Line"></div>
                    <div class="col-6 col-md-1 text-center SubjectLink ms-3"><a href="/course/MA001/1">See All</a></div>
                </div>
            {{-- Subject Bab --}}     
                <div class="BabDetail d-flex flex-row m-1 p-3 ">
                    {{-- Bab 1 --}}
                    <a href="/course/MA001/1/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/matematika.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Bangun Ruang</h5>
                        <p>5 video</p>
                    </div>
                    </a>

                    <a href="/course/MA001/2/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/matematika.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Bangun Datar</h5>
                        <p>4 video</p>
                    </div>
                    </a>

                    <a href="/course/MA001/3/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/IPA.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Pola bilangan</h5>
                        <p>5 video</p>
                    </div>
                    </a>

                    

                </div>       
    </div>
</div>

<div class="container mt-3 p-4 rounded-5 border" id="SubjectData">
    <div class="column p-1" id="Subject">
        {{-- Subject Header --}}
            <h2 class="SubjectName">Bahasa Indonesia</h1>
                <div class="d-flex  align-items-center">
                    <div class="col-sm-11 Line"></div>
                    <div class="col-6 col-md-1 text-center SubjectLink ms-3"><a href="course/ID001/1">See All</a></div>
                </div>
            {{-- Subject Bab --}}     
                <div class="BabDetail d-flex flex-row m-1 p-3 ">
                    {{-- Bab 1 --}}
                    <a href="/course/ID001/1/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/BahasaIndonesia.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Peribahasa</h5>
                        <p>5 video</p>
                    </div>
                    </a>

                    <a href="/course/ID001/2/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/matematika.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Puisi</h5>
                        <p>4 video</p>
                    </div>
                    </a>

                    <a href="/course/ID001/3/video">
                    <div class="d-flex flex-column border p-4 m-3 BabContainer">
                        <img src="{{asset('image/IPA.jpg')}}" alt="Image Here" class="BabImage">
                        <hr>
                        <h5>Pidato</h5>
                        <p>5 video</p>
                    </div>
                    </a>
                </div>      
    </div>
</div>

<script src="{{asset('../js/toggle.js')}}"></script>
@endsection