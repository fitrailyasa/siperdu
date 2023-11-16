<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['kode_pinjam', 'buku_id', 'peminjam', 'petugas_pinjam', 'petugas_kembali', 'status', 'denda', 'tanggal_pinjam', 'tanggal_kembali', 'tanggal_pengembalian'];

    // accesor
    public function getDendaAttribute($value)
    {
        return $value ? "Rp. {$value}" : '-' ;
    }
   
    public function getTanggalPinjamAttribute($value)
    {
        return Carbon::create($value)->format('d-M-Y');
    }
   
    public function getTanggalKembaliAttribute($value)
    {
        return Carbon::create($value)->format('d-M-Y');
    }
   
    public function getTanggalPengembalianAttribute($value)
    {
        return Carbon::create($value)->format('d-M-Y');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
}
