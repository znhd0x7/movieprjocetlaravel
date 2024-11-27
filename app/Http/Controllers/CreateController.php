<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        $genre = Genre::all();

        return view('create-film', compact('genre'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'genre' => 'required', // Pastikan genre yang dipilih ada di tabel genres
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:5120', // Validasi file gambar
            'title' => 'required|max:30', // Validasi judul maksimal 30 karakter
            'description' => 'required', 
            'publish_date' => 'required|date|before_or_equal:today', // Validasi tanggal publikasi
        ]);

        // Simpan file gambar ke storage (folder "photos")
        $imagePath = $request->file('photo')->storeAs(
            'image', 
            $request->file('photo')->getClientOriginalName(),
            'public'
        );


        Movies::create([
            'genre_id' => $request->genre, // ID genre yang dipilih
            'photo' => $imagePath, // Path gambar yang disimpan
            'title' => $request->title, // Judul film
            'description' => $request->description, // Deskripsi film
            'publish_date' => $request->publish_date, // Tanggal publikasi film
        ]);

        return redirect()->route('home')->with('success', 'Data berhasil disimpan');
    }

}