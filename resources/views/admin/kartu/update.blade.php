@extends('layouts.admin.app')

@section('title', 'Edit Anggota')

@section('datakartu', 'active')
@section('kelolakartu', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.kartu.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!--Edit kartu-->
    <div class="col-lg-12 form-wrapper" id="edit-kartu">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.kartu.update', $kartu->id) }}" enctype='multipart/form-data'>
                @endif
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="nama"
                            name="nama" id="nama" value="{{ $kartu->nama }}" enabled>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar Anggota</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control @error('gambar_kartu') is-invalid @enderror"
                            placeholder="gambar_kartu" name="gambar_kartu" id="gambar_kartu"
                            value="{{ $kartu->gambar_kartu }}" enabled>
                        @error('gambar_kartu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="nisn"
                            name="nisn" id="nisn" value="{{ $kartu->nisn }}" enabled>
                        @error('nisn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Roles ID</label>
                    <div class="col-sm-9">
                        <select class="col-sm-12 col-form-label rounded-2" name="roles_id" id="roles_id" enabled>
                            <option value="2">Anggota</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--./Edit kartu-->

@endsection
