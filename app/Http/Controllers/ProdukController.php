<?php

namespace App\Http\Controllers;
use Alert;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $produk =Produk::all();
        // confirmDelete('Hapus?','Anda Yakin Ingin Menghapusnya?');
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('produk','kategori'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required|unique:produks,nama_produk',
            'deskripsi' => 'required|unique:produks,deskripsi',
            'price' => 'required|unique:produks,price',
            'stock_quantity' => 'required|unique:produks,stock_quantity',
            'image' => 'required|max:4000',
            'kategori_id' => 'required',

        ]);
         $produk = new Produk();
         $produk->nama_produk = $request->nama_produk;
         $produk->deskripsi = $request->price;
         $produk->price = $request->price;
         $produk->stock_quantity = $request->stock_quantity;
         $produk->image = $request->image;
         $produk->kategori_id =$request->kategori_id;

         if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/produk/', $name);
            $produk->image = $name;
         }
         $produk->save();

         Alert::success('success', 'Data Berhasil Ditambahkan')->autoClose(1000);
         return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|unique:produks,nama_produk',
            'deskripsi' => 'required|unique:produks,deskripsi',
            'price' => 'required|unique:produks,price',
            'stock_quantity' => 'required|unique:produks,stock_quantity',
            'image' => 'required|image|max:4000|mimes:png,jpg',
            'kategori_id' => 'required',
          ]);
          $produk = Produk::findOrFail($id);
          $produk->nama_produk = $request->nama_produk;
          $produk->deskripsi = $request->price;
          $produk->price = $request->price;
          $produk->stock_quantity = $request->stock_quantity;
          $produk->image =$request->image;
          $produk->kategori_id =$request->kategori_id;


         if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('image/menu/', $name);
            $produk->image = $name;
         }
          $produk->save();

          Alert::success('success', 'Data Berhasil Diubah')->autoClose(1000);
          return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();
        Alert::success('success','data berhasil di hapus')->autoClose(1000);
        return redirect()->route('produk.index');
    }
}
