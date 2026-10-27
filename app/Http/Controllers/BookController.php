<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Books',
            'data' => $books
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
    'title' => 'required|string|max:255',
    'author_id' => 'required|exists:authors,id',
    'publisher' => 'required|string|max:255',
    'release_year' => 'required|integer',
]);

        $book = Book::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Book Berhasil Disimpan',
            'data' => $book
        ], 201);
    }

    public function show($id)
    {
        $book = Book::with('author')->find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book Tidak Ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Book',
            'data' => $book
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book Tidak Ditemukan',
            ], 404);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'publisher' => 'required|string|max:255',
            'year' => 'required|integer',
        ]);

        $book->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Book Berhasil Diupdate',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book Tidak Ditemukan',
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Book Berhasil Dihapus',
        ], 200);
    }
}