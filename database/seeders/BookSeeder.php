<?php  
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['author_id' => 1, 'title' => 'Pemrograman Laravel Dasar', 'release_year' => 2023, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 2, 'title' => 'Belajar Web Development', 'release_year' => 2023, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 3, 'title' => 'Algoritma dan Pemrograman', 'release_year' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 4, 'title' => 'Seni Menulis Kreatif', 'release_year' => 2024, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 5, 'title' => 'Jaringan Komputer Lanjut', 'release_year' => 2025, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}