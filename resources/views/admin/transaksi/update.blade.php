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
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-transaksi">
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
                            <label class="form-label">Kode Pinjam</label>
                            <input type="text" class="form-control @error('kode_pinjam') is-invalid @enderror"
                                placeholder="kode_pinjam" value="{{ $transaksi->kode_pinjam }}" name="kode_pinjam"
                                id="kode_pinjam" required>
                            @error('kode_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Peminjam id</label>
                            <input type="number" class="form-control @error('peminjam_id') is-invalid @enderror"
                                placeholder="peminjam_id" value="{{ $transaksi->peminjam_id }}" name="peminjam_id"
                                id="peminjam_id" required>
                            @error('peminjam_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Petugas Pinjam</label>
                            <input type="text" class="form-control @error('petugas_pinjam') is-invalid @enderror"
                                placeholder="petugas_pinjam" value="{{ $transaksi->petugas_pinjam }}" name="petugas_pinjam"
                                id="petugas_pinjam" required>
                            @error('petugas_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Petugas Kembali</label>
                            <input type="text" class="form-control @error('petugas_kembali') is-invalid @enderror"
                                placeholder="petugas_kembali" value="{{ $transaksi->petugas_kembali }}"
                                name="petugas_kembali" id="petugas_kembali" required>
                            @error('petugas_kembali')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control @error('status') is-invalid @enderror"
                                placeholder="status" value="{{ $transaksi->status }}" name="status" id="status"
                                required>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Denda</label>
                            <input type="number" class="form-control @error('denda') is-invalid @enderror"
                                placeholder="denda" value="{{ $transaksi->denda }}" name="denda" id="denda" required>
                            @error('denda')
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
                                placeholder="tanggal_pinjam" value="{{ $transaksi->tanggal_pinjam }}" name="tanggal_pinjam"
                                id="tanggal_pinjam" required>
                            @error('tanggal_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror"
                                placeholder="tanggal_kembali" value="{{ $transaksi->tanggal_kembali }}"
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
                                placeholder="tanggal_pengembalian" value="{{ $transaksi->tanggal_pengembalian }}"
                                name="tanggal_pengembalian" id="tanggal_pengembalian" required>
                            @error('tanggal_pengembalian')
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
    <!-- ./Edit transaksi -->

@endsection
