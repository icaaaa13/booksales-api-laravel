<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Read all data genre
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Genres',
            'data' => $genres
        ], 200);
    }

    // Create data genre
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:genres,name',
        ]);

        $genre = Genre::create([
            'name' => $request->name
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Disimpan',
            'data' => $genre
        ], 201);
    }
}