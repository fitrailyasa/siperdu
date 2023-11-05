@extends('layouts.admin.app')

@section('title', 'Tambah Transaksi')

@section('dataTransaksi', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.transaksi.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Tambah transaksi -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-transaksi">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.transaksi.store') }}" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Kode Pinjam</label>
                            <input type="text" class="form-control @error('kode_pinjam') is-invalid @enderror"
                                placeholder="kode_pinjam" name="kode_pinjam" id="kode_pinjam" required>
                            @error('kode_pinjam')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Peminjam id</label>
                            <input type="number" class="form-control @error('peminjam_id') is-invalid @enderror"
                                placeholder="peminjam_id" name="peminjam_id" id="peminjam_id" required>
                            @error('peminjam_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                placeholder="Slug" name="slug" id="slug" required>
                            @error('slug')
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
    <!-- ./Tambah transaksi -->

@endsection
