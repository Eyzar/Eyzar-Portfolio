@extends('layout.mainLayout')
@section('title', 'Edumate | Mata Pelajaran')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/Mapel.css') }}">


    {{-- Judul Section --}}
    <div class="container text-start d-flex flex-row mt-5">
        <div class="col-sm-4"><img src="{{ asset($subject->image) }}" alt="" class="SubjectImage"></div>
        <div class="col-sm-8 py-3">
            <div class="col border SubjectDescription rounded-end-5 px-3">
                <h2>{{ $subject->subject_name }}</h2>
                <p>{{ $subject->description }}</p>
            </div>
        </div>
    </div>

    <div class="container text-center mt-3 border rounded-pill" id="Class">
        <ul class="row justify-content-md-center mt-3">
            <li class="col-3 border-end">
                <h2 class="text-center">Pilih Kelas</h2>
            </li>
            <li class="col"><button class="btn btn-light {{ $class->id === 1 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 1 }}" class="class-link">Kelas
                        1</a></button>
            </li>
            <li class="col"><button class="btn btn-light {{ $class->id === 2 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 2 }}" class="class-link">Kelas
                        2</a></button>
            </li>
            <li class="col"><button class="btn btn-light {{ $class->id === 3 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 3 }}" class="class-link">Kelas
                        3</a></button>
            </li>
            <li class="col"><button class="btn btn-light {{ $class->id === 4 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 4 }}" class="class-link">Kelas
                        4</a></button>
            </li>
            <li class="col"><button class="btn btn-light {{ $class->id === 5 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 5 }}" class="class-link">Kelas
                        5</a></button></li>
            <li class="col"><button class="btn btn-light {{ $class->id === 6 ? 'active' : '' }}"><a
                        href="/course/{{ $subject->subject_id }}/{{ 6 }}" class="class-link">Kelas
                        6</a></button></li>
        </ul>
    </div>

    <hr class="container">

    {{-- List Bab Mapel --}}
    <div class="container border mt-3 px-5 bg-light rounded-top-5">
        <div class="row">
            @foreach ($class->bab->where('subject_id', $subject->subject_id) as $bab)
                <div class="col-md-3 d-flex flex-column align-items-center rounded-top-5 BabContainer">
                    <div class="ImageBab border-bottom pb-3">
                        <img src="{{ asset($subject->image) }}" alt="">
                    </div>
                    <div class="align-self-start ps-3 mt-2">
                        <a href="/course/{{ $subject->subject_id }}/{{ $class->id }}/video"
                            class="text-center text-decoration-none text-secondary">
                            <h4>{{ $bab->bab_name }}</h4>
                        </a>
                        <p class="text-center">{{ $bab->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <script src="{{ asset('../js/toggle.js') }}"></script>
@endsection
