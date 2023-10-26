<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['judul', 'tanggal', 'stok', 'sampul', 'slug', 'penulis', 'tahun_terbit', 'tempat_terbit', 'halaman', 'tinggi', 'ddc', 'isbn', 'sumber_buku', 'no_inventaris', 'keterangan', 'kategori_id', 'rak_id', 'penerbit_id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class);
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function buku()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }

    // mutator
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = ucfirst($value);
    }
   
    public function setPenulisAttribute($value)
    {
        $this->attributes['penulis'] = ucfirst($value);
    }
}
