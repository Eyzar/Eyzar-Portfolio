<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\materi;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $Course = Course::all();
        return view('list', ['CourseList' => $Course]);
    }

    public function show(){
        $Materi = materi::all();
        return view('subject' , ['SubjectList' => $Materi]);
    }
}
