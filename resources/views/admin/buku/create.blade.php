@extends('layouts.admin.app')

@section('title', 'Tambah Buku')

@section('dataBuku', 'active')
@section('kelolaBuku', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.buku.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Tambah Buku -->
    <div class="col-lg-12 form-wrapper" id="tambah-buku">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.buku.store') }}" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Judul" name="judul" id="judul" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                placeholder="Tanggal" name="tanggal" id="tanggal" required>
                            @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Sampul</label>
                            <input type="file" class="form-control @error('sampul') is-invalid @enderror"
                                placeholder="Sampul" name="sampul" id="sampul" required>
                            @error('sampul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                placeholder="Penulis" name="penulis" id="penulis" required>
                            @error('penulis')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror"
                                placeholder="Tahun Terbit" name="tahun_terbit" id="tahun_terbit" required>
                            @error('tahun_terbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Tempat Terbit</label>
                            <input type="text" class="form-control @error('tempat_terbit') is-invalid @enderror"
                                placeholder="Tempat Terbit" name="tempat_terbit" id="tempat_terbit" required>
                            @error('tempat_terbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Sumber Buku</label>
                            <input type="text" class="form-control @error('sumber_buku') is-invalid @enderror"
                                placeholder="Sumber Buku" name="sumber_buku" id="sumber_buku" required>
                            @error('sumber_buku')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                placeholder="Keterangan" name="keterangan" id="keterangan" required>
                            @error('keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <select class="form-control @error('penerbit_id') is-invalid @enderror" name="penerbit_id"
                                id="penerbit_id">
                                <option value="">Pilih Penerbit</option>
                                @foreach ($penerbits as $penerbit)
                                    <option value="{{ $penerbit->id }}">{{ $penerbit->nama }}</option>
                                @endforeach

                                @endfor
                                @php
                                    $seenIds = [];
                                @endphp
                                @foreach ($bukus as $buku)
                                    @if ($buku->penerbit_id !== null && !in_array($buku->penerbit_id, $seenIds))
                                        <option value="{{ $buku->penerbit_id }}">{{ $buku->penerbit_id }}</option>
                                        @php
                                            $seenIds[] = $buku->penerbit_id;
                                        @endphp
                                    @endif
                                @endforeach
                            </select>
                            @error('penerbit_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id"
                                id="kategori_id">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Rak</label>
                            <select class="form-control @error('rak_id') is-invalid @enderror" name="rak_id"
                                id="rak_id">
                                @foreach ($raks as $rak)
                                    <option value="{{ $rak->id }}">{{ $rak->kode_rak }}</option>
                                @endforeach
                            </select>
                            @error('rak_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                placeholder="Stok" name="stok" id="stok" required>
                            @error('stok')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Halaman</label>
                            <input type="number" class="form-control @error('halaman') is-invalid @enderror"
                                placeholder="Halaman" name="halaman" id="halaman" required>
                            @error('halaman')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tinggi</label>
                            <input type="number" class="form-control @error('tinggi') is-invalid @enderror"
                                placeholder="Tinggi" name="tinggi" id="tinggi" required>
                            @error('tinggi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">DDC</label>
                            <input type="text" class="form-control @error('ddc') is-invalid @enderror"
                                placeholder="DDC" name="ddc" id="ddc" required>
                            @error('ddc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">ISBN</label>
                            <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                placeholder="ISBN" name="isbn" id="isbn" required>
                            @error('isbn')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Tambah Buku -->

@endsection
