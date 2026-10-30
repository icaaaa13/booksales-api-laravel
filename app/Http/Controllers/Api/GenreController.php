<?php 
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Menampilkan semua data genre 
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Genres',
            'data' => $genres
        ], 200);
    }

    // Menyimpan data genre baru 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Disimpan',
            'data' => $genre
        ], 201);
    }

    // Menampilkan detail genre berdasarkan ID 
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Genre',
            'data' => $genre
        ], 200);
    }

    // Memperbarui data genre 
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Diperbarui',
            'data' => $genre
        ], 200);
    }

    // Menghapus data genre (destroy) + Validasi tidak ditemukan
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => 'Data Genre tidak ditemukan',
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => 'Genre Berhasil Dihapus',
        ], 200);
    }
}