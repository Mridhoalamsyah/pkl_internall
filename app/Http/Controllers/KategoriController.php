<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Alert;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori =Kategori::all();
        // confirmDelete('Hapus?','Anda Yakin Ingin Menghapusnya?');
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|unique:kategoris,nama_kategori',
            'slug' => 'required|unique:kategoris,slug',
            'deskripsi' => 'required|unique:kategoris,deskripsi',

        ]);
         $kategori = new Kategori();
         $kategori->nama_kategori = $request->nama_kategori;
         $kategori->slug = $request->slug;
         $kategori->deskripsi = $request->deskripsi;
         $kategori->save();

         Alert::success('success', 'Data Berhasil Dtambahkan')->autoClose(1000);
         return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $id)
    {
        $kategori = Kategori::findOrFail($id);
         return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori',
            'slug' => 'required|unique:kategoris,slug',
            'deskripsi' => 'required|unique:kategoris,deskripsi',

          ]);
          $kategori = Kategori::findOrFail($id);
          $kategori->nama_kategori = $request->nama_kategori;
          $kategori->slug = $request->slug;
          $kategori->deskripsi = $request->deskripsi;
          $kategori->save();

          Alert::success('success', 'Data Berhasil Diubah')->autoClose(1000);
          return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $id)
    {

        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        Alert::success('success','data berhasil di hapus')->autoClose(1000);
        return redirect()->route('kategori.index');
    }

};
