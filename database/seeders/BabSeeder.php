<?php

namespace Database\Seeders;

use App\Models\Bab;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Bab::truncate();
        Schema::enableForeignKeyConstraints();

        $csvData = fopen(base_path('database/csv/bab.csv'), 'r');

        $transRaw = true;
        while (($data = fgetcsv($csvData, 2000, ',')) !== false){
            if (!$transRaw){
                Bab::create([
                    'bab_id' => $data[0],
                    'class_id' => $data[1],
                    'subject_id' => $data[2],
                    'bab_name' => $data[3], 
                    'description' => $data[4]
                ]);
            }
            $transRaw = false;
        };
        fclose($csvData);
    }
}
