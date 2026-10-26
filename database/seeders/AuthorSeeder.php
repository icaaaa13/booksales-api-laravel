<?php  
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Abil Alqohira', 'country' => 'Indonesia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Yunia Asyhara', 'country' => 'Malaysia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aditya Sanjaya', 'country' => 'Korea', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alifa Fazilatun Nisa', 'country' => 'Australia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aqbil Qhintar', 'country' => 'Jepang', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}