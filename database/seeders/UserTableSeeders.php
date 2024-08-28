<?php

namespace Database\Seeders;

use Carbon\Carbon;
use app\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'Karin',
            'email' => 'karin@gmail.com',
            'password' => Hash::make('123456'),
            'nomor_telepon' => "081587189101",
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]);
        
        // User::factory()->count(20)->create();
    }
}
