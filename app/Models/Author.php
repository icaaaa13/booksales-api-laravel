<?php

namespace App\Models;

class Author
{
    public static function allAuthors()
    {
        return [
            ['id' => 1, 'name' => 'Abil Alqohira', 'country' => 'Indonesia'],
            ['id' => 2, 'name' => 'Yunia Asyhara', 'country' => 'Indonesia'],
            ['id' => 3, 'name' => 'Aditya Sanjaya', 'country' => 'Indonesia'],
            ['id' => 4, 'name' => 'Alifa Fazilatun Nisa', 'country' => 'Indonesia'],
            ['id' => 5, 'name' => 'Adriano Ibragus Antoni', 'country' => 'Indonesia'],
        ];
    }
}