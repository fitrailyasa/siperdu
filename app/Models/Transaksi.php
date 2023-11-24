<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['kode_pinjam', 'buku_id', 'peminjam', 'petugas_pinjam', 'petugas_kembali', 'status', 'denda', 'tanggal_pinjam', 'tanggal_kembali', 'tanggal_pengembalian', 'kategori']; // Menambahkan 'kategori' ke fillable

    // Accessor
    public function getDendaAttribute($value)
    {
        return $value ?? '-';
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
        return $value ? Carbon::create($value)->format('d-M-Y') : null;
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }

    public function hitungDenda()
    {
        // Tambahkan logika untuk menghitung denda berdasarkan selisih tanggal
        $tanggalKembali = Carbon::parse($this->tanggal_kembali);
        $tanggalPengembalian = Carbon::parse($this->tanggal_pengembalian);

        // Hitung selisih hari
        $selisihHari = $tanggalKembali->diffInDays($tanggalPengembalian, false);

        // Hitung denda (misalnya, biaya denda per hari adalah 1000)
        $biayaDendaPerHari = 500;
        $denda = max(0, $selisihHari) * $biayaDendaPerHari;

        // Atur nilai denda pada model
        $this->denda = $denda;
    }
}
