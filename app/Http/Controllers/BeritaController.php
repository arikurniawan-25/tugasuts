<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(){
        return view('berita');
    }
    
    // // Untuk publik
    // public function index()
    // {
    //     $berita = Berita::latest()->get();
    //     return view('berita', compact('berita'));
    // }

    // public function show($id)
    // {
    //     $berita = Berita::findOrFail($id);
    //     return view('detail_berita', compact('berita'));
    // }

    // // Untuk admin
    // public function adminIndex()
    // {
    //     $berita = Berita::latest()->get();
    //     return view('admin.berita.index', compact('berita'));
    // }

    // public function create()
    // {
    //     return view('admin.berita.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'judul' => 'required',
    //         'konten' => 'required',
    //     ]);

    //     Berita::create($request->all());

    //     return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    // }
   
}
