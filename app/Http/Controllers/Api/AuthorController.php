<?php  
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Menampilkan semua data author (index)
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Authors',
            'data' => $authors
        ], 200);
    }

    // Menyimpan data author baru (store)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author = Author::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Disimpan',
            'data' => $author
        ], 201);
    }

    // Menampilkan detail author berdasarkan ID (show) + Validasi tidak ditemukan
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Author',
            'data' => $author
        ], 200);
    }

    // Memperbarui data author (update) + Validasi tidak ditemukan
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);

        $author->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Diperbarui',
            'data' => $author
        ], 200);
    }

    // Menghapus data author (destroy) + Validasi tidak ditemukan
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Data Author tidak ditemukan',
            ], 404);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Author Berhasil Dihapus',
        ], 200);
    }
}