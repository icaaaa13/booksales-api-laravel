<?php

namespace App\Models;

class Genre
{
    public static function allGenres()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Novel'],
            ['id' => 3, 'name' => 'Science Fiction'],
            ['id' => 4, 'name' => 'Mystery'],
            ['id' => 5, 'name' => 'Biography'],
        ];
    }
}