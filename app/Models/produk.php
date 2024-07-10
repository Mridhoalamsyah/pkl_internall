<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $fillable = ['id','nama_produk','deskripsi','price','stock_quantity','image','kategori_id'];
    public $timestamps = true;

    public function Kategori() {
        return $this->belongsTo(Kategori::class, 'kategori_id');

    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('image/produk/' . $this->image))) {
            return unlink(public_path('image/produk/' . $this->image));
        }
    }

    public function order_item(){
        $this->belongsto(order_item::class, 'produk_id');
    }
}
