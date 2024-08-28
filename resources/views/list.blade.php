@extends('layout.mainLayout')
@section('title', 'Edumate | Mata Pelajaran')
@section('content')

    <div class="container text-center ListCourse">
        <div class="row">
            @foreach ($subjectList as $subject)
                <a href="/course/{{ $subject->subject_id }}/{{ 1 }}" class="course-link">
                    <div class="col Course" id="buttonCourse">
                        <img class="imgCourse" src="{{ asset($subject->image) }}" alt="">
                        <h6 class="TitleCourse ">{{ $subject->subject_name }}</h6>
                        <p class="DescriptionCourse text-start"> {{ $subject->description }} </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{--     
    <div class="notif hidden">
        <h5 class="text-center">{{ $subject->subject_name }} Kelas</h5>
        <button class="tombol-silang"> X </button>
        <form class="d-inline-block" action="/course/subject" method="POST">
            <input type="number" min="1" max="6" class="m-3" id="ClassID">
            @csrf
            @method('get')
            <div class="btn-valid">
                <button class="btn btn-success" id="btn--yes">Submit</button>
                <div class="btn btn-danger" id="btn--no">Cancel</div>
            </div>
        </form>
    </div>
    <div class="overlay hidden"></div> --}}

    <script src="{{ asset('../js/script.js') }}"></script>

@endsection
