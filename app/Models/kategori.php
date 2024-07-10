<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_kategori','slug','deskripsi'];
    public $timestamp = true;

    public function produk(){
        $this->HasMany(produk::class, 'kategori_id');
    }
}
