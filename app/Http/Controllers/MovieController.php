<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movies;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movie = Movies::paginate(4);
        $genre = Genre::all();

        return view('layout', compact('movie', 'genre'));
    }

    public function delete($id){
        $data = Movies::find($id);

        if($data){
            $data->delete();
            return redirect()->route('home')->with('success', 'Data berhasil dihapus');
        }
    }

}