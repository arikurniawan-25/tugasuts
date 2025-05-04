<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index(){
        return view('galeri');
    }   
    // // Untuk publik
    // public function index()
    // {
    //     $galeri = Galeri::latest()->get();
    //     return view('galeri', compact('galeri'));
    // }

    // // Untuk admin
    // public function adminIndex()
    // {
    //     $galeri = Galeri::latest()->get();
    //     return view('admin.galeri.index', compact('galeri'));
    // }

    // public function create()
    // {
    //     return view('admin.galeri.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'judul' => 'required',
    //         'gambar' => 'required|image',
    //     ]);

    //     $file = $request->file('gambar')->store('galeri', 'public');

    //     Galeri::create([
    //         'judul' => $request->judul,
    //         'gambar' => $file,
    //     ]);

    //     return redirect()->route('admin.galeri.index')->with('success', 'Foto berhasil ditambahkan');
    // }
}
