<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Subject;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('list', ['subjectList' => $subject]);
    }
    
    public function show($subject_id, $class_id)
    {
        $class = Kelas::with('bab')->findOrFail($class_id);
        $subject = Subject::findOrFail($subject_id);
        return view('Mapel', [
            'class' => $class, 
            'subject' => $subject,
        ]);
    }

    public function content(){
        $subject = Subject::findOrFail('MA001');
        return view('subject', ['subject' => $subject]);
    }
}
