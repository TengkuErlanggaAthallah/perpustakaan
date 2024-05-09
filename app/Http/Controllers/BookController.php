<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Book; // Mengimpor model Book

class ShelfController extends Controller
{
    public function addToRakbuku($bookId)
    {
        // Ambil buku dari database
        $book = Book::find($bookId);

        // Simpan buku ke dalam sesi
        Session::push('shelf', $book);

        return redirect()->route('shelf')->with('success', 'Buku berhasil ditambahkan ke rak.');
    }

    public function shelf()
    {
        // Ambil data rak buku dari session
        $shelfBooks = Session::get('shelf', []);

        return view('Rakbuku', ['shelfBooks' => $shelfBooks]);
    }
}
