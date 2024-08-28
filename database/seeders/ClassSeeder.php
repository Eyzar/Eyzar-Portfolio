<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
            'class_name' => 'Kelas 1', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'class_name' => 'Kelas 2', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'class_name' => 'Kelas 3', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'class_name' => 'Kelas 4', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'class_name' => 'Kelas 5', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
            [
            'class_name' => 'Kelas 6', 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
            ],
        ];

        Schema::disableForeignKeyConstraints();
        Kelas::truncate();
        Schema::enableForeignKeyConstraints();

        Kelas::insert($data);
    }
}
