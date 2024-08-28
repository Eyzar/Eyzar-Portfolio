<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BabController extends Controller
{
    public function index($subjectID, $id){
        $kelas = Kelas::with('bab')->find($id);
        return view('Mapel', [
            'kelas' => $kelas, 
            'subject' => $subjectID,
        ]);
    }
}
