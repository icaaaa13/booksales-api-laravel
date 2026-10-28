<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Authors',
            'data' => $authors
        ], 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author = Author::create([
            'name' => $request->name,
            'country' => $request->country,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Disimpan',
            'data' => $author
        ], 201); 
}
}