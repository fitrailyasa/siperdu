<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = ['judul', 'tanggal', 'stok', 'sampul', 'penulis', 'tahun_terbit', 'tempat_terbit', 'halaman', 'tinggi', 'ddc', 'isbn', 'sumber_buku', 'keterangan', 'kategori_id', 'rak_id', 'penerbit_id'];

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

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
