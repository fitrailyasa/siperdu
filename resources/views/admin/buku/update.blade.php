@extends('layouts.admin.app')

@section('title', 'Edit Buku')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.buku.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Edit Buku -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-buku">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.buku.update', $buku->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Judul" name="judul" id="judul" value="{{ $buku->judul }}" required>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                placeholder="Tanggal" name="tanggal" id="tanggal" value="{{ $buku->tanggal }}" required>
                            @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Slug" name="slug" id="slug" value="{{ $buku->slug }}" required>
                            @error('slug')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Sampul</label>
                            <input type="file" class="form-control @error('sampul') is-invalid @enderror"
                                placeholder="Sampul" name="sampul" id="sampul" value="{{ $buku->sampul }}" required>
                            @error('sampul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                placeholder="Penulis" name="penulis" id="penulis" value="{{ $buku->penulis }}" required>
                            @error('penulis')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control @error('tahun_terbit') is-invalid @enderror"
                                placeholder="Tahun Terbit" name="tahun_terbit" id="tahun_terbit"
                                value="{{ $buku->tahun_terbit }}" required>
                            @error('tahun_terbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tempat Terbit</label>
                            <input type="text" class="form-control @error('tempat_terbit') is-invalid @enderror"
                                placeholder="Tempat Terbit" name="tempat_terbit" id="tempat_terbit"
                                value="{{ $buku->tempat_terbit }}" required>
                            @error('tempat_terbit')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">No Inventaris</label>
                            <input type="number" class="form-control @error('no_inventaris') is-invalid @enderror"
                                placeholder="No Inventaris" name="no_inventaris" id="no_inventaris"
                                value="{{ $buku->no_inventaris }}" required>
                            @error('no_inventaris')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Sumber Buku</label>
                            <input type="text" class="form-control @error('sumber_buku') is-invalid @enderror"
                                placeholder="Sumber Buku" name="sumber_buku" id="sumber_buku"
                                value="{{ $buku->sumber_buku }}" required>
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
                                placeholder="Keterangan" name="keterangan" id="keterangan"
                                value="{{ $buku->keterangan }}" required>
                            @error('keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Penerbit ID</label>
                            <input type="number" class="form-control @error('penerbit_id') is-invalid @enderror"
                                placeholder="Penerbit ID" name="penerbit_id" id="penerbit_id"
                                value="{{ $buku->penerbit_id }}" required>
                            @error('penerbit_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Kategori ID</label>
                            <input type="number" class="form-control @error('kategori_id') is-invalid @enderror"
                                placeholder="Kategori ID" name="kategori_id" id="kategori_id"
                                value="{{ $buku->kategori_id }}" required>
                            @error('kategori_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Rak ID</label>
                            <input type="number" class="form-control @error('rak_id') is-invalid @enderror"
                                placeholder="Rak ID" name="rak_id" id="rak_id" value="{{ $buku->rak_id }}"
                                required>
                            @error('rak_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                placeholder="Stok" name="stok" id="stok" value="{{ $buku->stok }}" required>
                            @error('stok')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Halaman</label>
                            <input type="number" class="form-control @error('halaman') is-invalid @enderror"
                                placeholder="Halaman" name="halaman" id="halaman" value="{{ $buku->halaman }}"
                                required>
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
                                placeholder="Tinggi" name="tinggi" id="tinggi" value="{{ $buku->tinggi }}"
                                required>
                            @error('tinggi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">DDC</label>
                            <input type="text" class="form-control @error('ddc') is-invalid @enderror"
                                placeholder="DDC" name="ddc" id="ddc" value="{{ $buku->ddc }}" required>
                            @error('ddc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">ISBN</label>
                            <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                placeholder="ISBN" name="isbn" id="isbn" value="{{ $buku->isbn }}" required>
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
    <!-- ./Edit Buku -->

@endsection
