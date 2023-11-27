@extends('layouts.admin.app')

@section('title', 'Edit Transaksi')

@section('dataTransaksi', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.transaksi.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Edit transaksi -->
    <div class="col-lg-12 form-wrapper" id="edit-transaksi">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.transaksi.update', $transaksi->id) }}"
                        enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Buku</label>
                            <select class="form-select @error('buku_id') is-invalid @enderror" name="buku_id" id="buku_id">
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}" {{ $buku->id == $transaksi->buku_id ? 'selected' : '' }}>
                                        {{ $buku->judul }}
                                    </option>
                                @endforeach
                            </select>
                            @error('buku_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select @error('kategori') is-invalid @enderror" name="kategori" id="kategori">
                                <option value="Koleksi" {{ $transaksi->status == 'Koleksi' ? 'selected' : '' }}>Koleksi</option>
                                <option value="Pelajaran 1 Semester" {{ $transaksi->status == 'Pelajaran 1 Semester' ? 'selected' : '' }}>Pelajaran 1 Semester</option>
                                <option value="Pelajaran 2 Semester" {{ $transaksi->status == 'Pelajaran 2 Semester' ? 'selected' : '' }}>Pelajaran 2 Semester</option>
                            </select>
                            @error('kategori')
                                 <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                                <option value="Sedang Dipinjam" {{ $transaksi->status == 'Sedang Dipinjam' ? 'selected' : '' }}>Sedang Dipinjam</option>
                                <option value="Sudah Dikembalikan" {{ $transaksi->status == 'Sudah Dikembalikan' ? 'selected' : '' }}>Sudah Dikembalikan</option>
                            </select>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control @error('peminjam') is-invalid @enderror"
                                placeholder="Nama Peminjam" value="{{ $transaksi->peminjam }}" name="peminjam" id="peminjam"
                                required>
                            @error('peminjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Petugas Pinjam</label>
                            <input type="text" class="form-control @error('petugas_pinjam') is-invalid @enderror"
                                placeholder="Nama Petugas Pinjam" value="{{ $transaksi->petugas_pinjam }}" name="petugas_pinjam"
                                id="petugas_pinjam" required>
                            @error('petugas_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Petugas Kembali</label>
                            <input type="text" class="form-control @error('petugas_kembali') is-invalid @enderror"
                                placeholder="Nama Petugas Kembali" value="{{ $transaksi->petugas_kembali }}"
                                name="petugas_kembali" id="petugas_kembali" required>
                            @error('petugas_kembali')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pinjam</label>
                            <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                                placeholder="tanggal_pinjam" value="{{ \Carbon\Carbon::parse($transaksi->tanggal_pinjam)->format('Y-m-d') }}"
                                name="tanggal_pinjam" id="tanggal_pinjam" required>
                            @error('tanggal_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror"
                                placeholder="tanggal_kembali" value="{{ \Carbon\Carbon::parse($transaksi->tanggal_kembali)->format('Y-m-d') }}"
                                name="tanggal_kembali" id="tanggal_kembali" required>
                            @error('tanggal_kembali')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control @error('tanggal_pengembalian') is-invalid @enderror"
                                placeholder="tanggal_pengembalian"
                                @if(isset($transaksi))
                                    value="{{ $transaksi->tanggal_pengembalian ? \Carbon\Carbon::parse($transaksi->tanggal_pengembalian)->format('Y-m-d') : '' }}"
                                @else
                                    value="{{ old('tanggal_pengembalian') }}"
                                @endif
                                name="tanggal_pengembalian" id="tanggal_pengembalian">
                            @error('tanggal_pengembalian')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Denda</label>
                            <input type="text" class="form-control @error('denda') is-invalid @enderror"
                                placeholder="denda" value="{{ $transaksi->denda }}" name="denda" id="denda" readonly>
                            @error('denda')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Edit transaksi -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Fungsi untuk mengatur atribut readonly pada tanggal pengembalian dan petugas kembali
            function setReadonlyStatus() {
                var status = $('#status').val();
                var readonly = status === 'Sedang Dipinjam';

                $('#tanggal_pengembalian').prop('readonly', readonly);
                $('#petugas_kembali').prop('readonly', readonly);
            }

            // Panggil fungsi saat elemen #status berubah
            $('#status').on('change', function () {
                setReadonlyStatus();
            });

            // Fungsi untuk menghitung tanggal kembali
            function hitungTanggalKembali() {
                var kategori = $('#kategori').val();
                var tanggalPinjam = $('#tanggal_pinjam').val();

                if (kategori && tanggalPinjam) {
                    var jumlahHari;

                    switch (kategori) {
                        case 'Koleksi':
                            jumlahHari = 3;
                            break;
                        case 'Pelajaran 1 Semester':
                            // Ubah durasi menjadi 6 bulan
                            jumlahHari = 180;
                            break;
                        case 'Pelajaran 2 Semester':
                            // Tambahkan 1 tahun untuk Pelajaran 2 Semester
                            jumlahHari = 365;
                            break;
                        // Tambahkan case untuk kategori lain jika diperlukan
                        default:
                            jumlahHari = 0;
                            break;
                    }

                    var tanggalKembali = new Date(tanggalPinjam);
                    tanggalKembali.setDate(tanggalKembali.getDate() + jumlahHari);

                    var tahun = tanggalKembali.getFullYear();
                    var bulan = ('0' + (tanggalKembali.getMonth() + 1)).slice(-2);
                    var hari = ('0' + tanggalKembali.getDate()).slice(-2);

                    var tanggalKembaliFormatted = tahun + '-' + bulan + '-' + hari;

                    $('#tanggal_kembali').val(tanggalKembaliFormatted);
                }
            }

            // Panggil fungsi hitungTanggalKembali saat elemen #kategori berubah
            $('#kategori').on('change', hitungTanggalKembali);

            // Panggil fungsi hitungTanggalKembali saat elemen #tanggal_pinjam berubah
            $('#tanggal_pinjam').on('change', hitungTanggalKembali);

            // Fungsi untuk menghitung denda
            function hitungDenda() {
                var tanggalKembali = $('#tanggal_kembali').val();
                var tanggalPengembalian = $('#tanggal_pengembalian').val();

                // Periksa apakah kedua tanggal sudah diisi
                if (tanggalKembali && tanggalPengembalian) {
                    var selisihHari = Math.max(0, Math.ceil((new Date(tanggalPengembalian) - new Date(tanggalKembali)) / (1000 * 60 * 60 * 24)));
                    var biayaDendaPerHari = 500; // Ubah biaya denda per hari sesuai kebutuhan
                    var denda = selisihHari * biayaDendaPerHari;

                    // Batasi nilai denda maksimal menjadi 5000
                    denda = Math.min(denda, 5000);

                    $('#denda').val(denda);
                } else {
                    // Jika salah satu atau keduanya kosong, atur nilai denda menjadi 0
                    $('#denda').val(0);
                }
            }

            // Ganti '#tanggal_kembali', '#tanggal_pengembalian', dan '#petugas_kembali' dengan ID sesuai dengan formulir Anda
            $('#tanggal_kembali, #tanggal_pengembalian, #petugas_kembali').on('input', function () {
                hitungDenda();
            });

            // Panggil fungsi setReadonlyStatus saat halaman dimuat
            setReadonlyStatus();

            // Panggil fungsi hitungDenda saat halaman dimuat
            hitungDenda();
        });
    </script>

@endsection
