@extends('layouts.admin.app')

@section('title', 'Tambah Rak')

@section('dataBuku', 'active')
@section('kelolaRak', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.rak.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Tambah rak -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-rak">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.rak.store') }}" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kode Rak</label>
                            <input type="number" class="form-control @error('kode_rak') is-invalid @enderror"
                                placeholder="kode_rak" name="kode_rak" id="kode_rak" required>
                            @error('kode_rak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Rak</label>
                            <input type="text" class="form-control @error('nama_rak') is-invalid @enderror"
                                placeholder="nama_rak" name="nama_rak" id="nama_rak" required>
                            @error('nama_rak')
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
    <!-- ./Tambah rak -->

@endsection
