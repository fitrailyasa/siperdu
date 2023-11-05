@extends('layouts.admin.app')

@section('title', 'Tambah Penerbit')

@section('dataBuku', 'active')
@section('kelolaPenerbit', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.penerbit.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Tambah penerbit -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="tambah-penerbit">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.penerbit.store') }}" enctype="multipart/form-data">
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-2">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="nama" name="nama" id="nama" required>
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-2">
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
    <!-- ./Tambah penerbit -->

@endsection
