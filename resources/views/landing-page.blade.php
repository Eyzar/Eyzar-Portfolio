    @extends('layout.mainLayout')

@section('title', 'Edumate')

@section('content')

<link rel="stylesheet" href="{{asset('css/landing-page.css')}}">
    <section class="hero-section pt-5 pb-5">
        <div class="container ct-1">
            <div class="hero-content mt-5">
                <span class="pb-2 fw-medium">E-Learning Media</span>
                <h1 class="pb-3">Belajar dimana saja kapan saja dengan EduMate</h2>
                    <p class="pb-3">Nikmati pengalaman belajar yang menyenangkan dengan EduMate. Eksplorasi berbagai macam
                        materi sekolah dengan mudah dan dapatkan pengetahuan baru!</p>
                    <div class="btn-group">
                        <a class="hero-btn" href="/session/register">Registrasi</a>
                        <a class="hero-btn" href="#Content">Eksplorasi</a>
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

    <section class="feature-section container" id="Content">
        <h2 class="heading">Kenapa Memilih EduMate?</h2>
        <ul class="features-content-box">
            <li class="feature">
                <ion-icon name="book" class="icon"></ion-icon>
                <span class="title">Kursus beragam</span>
                <p>Nikmati konten kursus beragam yang tidak bisa didapatkan dari e-learning lain. Semua konten dapat diakses
                    secara gratis oleh seluruh pelajar!
                </p>
            </li>
            <li class="feature">
                <ion-icon name="videocam" class="icon"></ion-icon>
                <span class="title">Pembelajaran Interaktif</span>
                <p>Tidak ada alasan untuk tidak belajar. Buat perjalanan belajar mu menjadi menyenangkan dengan pembelajaran
                    interaktif dengan EduMate.
                </p>
            </li>
            <li class="feature">
                <ion-icon name="shuffle" class="icon"></ion-icon>
                <span class="title">Fleksibilitas</span>
                <p>
                    Belajar dimana saja dan kapan saja! Tidak ada halangan bagi kamu untuk belajar terus. Kamu bisa belajar
                    di tempat manapun yang kamu inginkan.
                </p>
            </li>
            <li class="feature">
                <ion-icon name="medal" class="icon"></ion-icon>
                <span class="title">Sertifikat EduMate</span>
                <p>Berikan reward untuk mengapresiasi progress belajar kamu dengan sertifikat EduMate. Proses belajar mu
                    tidak akan sia-sia dan terasa menyenangkan.
                </p>
            </li>
        </ul>
    </section>

    <div class="container">
        <section class="testimonial-section container">
            <img src="../image/landing-page/avatar/Avatar 1.jpg" alt="Avatar 1" class="testimonial-img">
            <blockquote class="testimonial-content">
                <p class="testimonial-text">
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, excepturi? Distinctio nesciunt atque cum
                    provident, voluptates ipsam autem temporibus similique enim fugiat ab explicabo. Natus iste in inventore
                    expedita sint!"
                </p>
                <footer class="testimonial-author">
                    <span>Anya Sulistiawati</span>
                    <p>SD Negeri 20 Sukabumi</p>
                </footer>
            </blockquote>
        </section>
    </div>

    <section class="what-inside--section container-fluid">
        <div class="what-inside--header mb-5">
            <h2 class="fw-bold mb-4 title">Apa saja yang ada di dalam EduMate?</h2>
            <p class="fw-medium  description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium totam
                officiis
                odit
                ratione omnis!
                Suscipit
                quisquam corrupti odio officia aliquid necessitatibus sequi dolorem, vitae nihil nam adipisci ad illum
                asperiores?
            </p>
        </div>
        <div class="what-inside--content container mb-5">
            <div class="inside">
                <span>500+</span>
                <h5>Video Learning</h5>
                <p>Mulai dari matematika, IPA, bahasa indonesia, dan inggris</p>
            </div>
            <div class="inside">
                <span>150+</span>
                <h5>Artikel</h5>
                <p>Berisi tentang fakta-fakta pengetahuan yang relate dengan pelajaran</p>
            </div>
            <div class="inside">
                <span>300+</span>
                <h5>Latihan Soal</h5>
                <p>Disediakan latihan soal yang beragam dan menyenangkan</p>
            </div>
        </div>
    </section>

    <section class="footer container-fluid mt-triple-large">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2023 EduMate, Inc</p>
            <a href="/"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../image/logo.png" alt="EduMate Logo" class="logo">
            </a>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact Us</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </section>

@endsection
