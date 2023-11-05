@extends('layouts.admin.app')

@section('title', 'Detail Buku')

@section('dataBuku', 'active')
@section('kelolaBuku', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.buku.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Detail Buku -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-buku">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.buku.show', $buku->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Judul" name="judul" id="judul" value="{{ $buku->judul }}" disabled>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                placeholder="Tanggal" name="tanggal" id="tanggal" value="{{ $buku->tanggal }}" disabled>
                            @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Slug" name="slug" id="slug" value="{{ $buku->slug }}" disabled>
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
                                placeholder="Sampul" name="sampul" id="sampul" value="{{ $buku->sampul }}" disabled>
                            @error('sampul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                placeholder="Penulis" name="penulis" id="penulis" value="{{ $buku->penulis }}" disabled>
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
                                value="{{ $buku->tahun_terbit }}" disabled>
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
                                value="{{ $buku->tempat_terbit }}" disabled>
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
                                value="{{ $buku->no_inventaris }}" disabled>
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
                                value="{{ $buku->sumber_buku }}" disabled>
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
                                value="{{ $buku->keterangan }}" disabled>
                            @error('keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input type="text" class="form-control @error('penerbit_id') is-invalid @enderror"
                                placeholder="Penerbit ID" name="penerbit_id" id="penerbit_id"
                                value="{{ $buku->penerbit_id }}" disabled>
                            @error('penerbit_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('kategori_id') is-invalid @enderror"
                                placeholder="Kategori ID" name="kategori_id" id="kategori_id"
                                value="{{ $buku->kategori_id }}" disabled>
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
                            <input type="text" class="form-control @error('rak_id') is-invalid @enderror"
                                placeholder="Rak ID" name="rak_id" id="rak_id" value="{{ $buku->rak_id }}"
                                disabled>
                            @error('rak_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                placeholder="Stok" name="stok" id="stok" value="{{ $buku->stok }}" disabled>
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
                                disabled>
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
                                disabled>
                            @error('tinggi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">DDC</label>
                            <input type="text" class="form-control @error('ddc') is-invalid @enderror"
                                placeholder="DDC" name="ddc" id="ddc" value="{{ $buku->ddc }}" disabled>
                            @error('ddc')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">ISBN</label>
                            <input type="text" class="form-control @error('isbn') is-invalid @enderror"
                                placeholder="ISBN" name="isbn" id="isbn" value="{{ $buku->isbn }}" disabled>
                            @error('isbn')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-right">
                        <a href="{{ route('admin.buku.edit', $buku->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Detail Buku -->

@endsection
