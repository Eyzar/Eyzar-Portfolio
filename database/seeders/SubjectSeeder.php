<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
            'subject_id' => 'MA001',
            'subject_name' => 'Matematika',
            'description' => 'Mari bersama-sama menjelajahi matematika dengan semangat petualangan! Video pembuka ini akan memperkenalkan konsep-konsep matematika secara unik, dengan tantangan-tantangan seru', 
            'image' => 'image/Matematika.jpg',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'subject_id' => 'IP001',
            'subject_name' => 'IPA',
            'description' => 'Dalam video pembelajaran ini, kita akan memulai perjalanan menakjubkan ke dalam dunia Ilmu Pengetahuan Alam (IPA). Persiapkan diri untuk menjelajahi misteri alam, eksperimen seru, dan konsep-konsep sains yang penuh kegembiraan.',
            'image' => 'image/IPA.jpg',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'subject_id' => 'EN001',
            'subject_name' => 'Bahasa Inggris',
            'description' => 'Dengan irama belajar yang seru, video pembuka ini akan memperkenalkan peserta didik pada dunia bahasa Inggris. Musik, gerakan, dan aktivitas menyenangkan akan membuat pembelajaran bahasa Inggris menjadi menyenangkan',
            'image' => 'image/BahasaInggris.jpg',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'subject_id' => 'ID001',
            'subject_name' => 'Bahasa Indonesia',
            'description' => 'Selamat datang di dunia keindahan bahasa Indonesia! Video ini akan memperkenalkan peserta didik pada keajaiban bahasa melalui cerita dan permainan kata yang menyenangkan',
            'image' => 'image/BahasaIndonesia.jpg',
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ]
        ];

        Schema::disableForeignKeyConstraints();
        Subject::truncate();
        Schema::enableForeignKeyConstraints();
        
        Subject::insert($data);
    }
}
