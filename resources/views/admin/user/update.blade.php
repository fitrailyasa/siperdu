@extends('layouts.admin.app')

@section('title', 'Edit Anggota')

@section('dataUser', 'active')
@section('kelolaUser', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.user.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!--Edit user-->
    <div class="col-lg-12 form-wrapper" id="edit-user">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.user.update', $user->id) }}" enctype='multipart/form-data'>
                @endif
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="nama"
                            name="nama" id="nama" value="{{ $user->nama }}" enabled>
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"
                            name="email" id="email" value="{{ $user->email }}" enabled>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar User</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control @error('gambar_user') is-invalid @enderror"
                            placeholder="gambar_user" name="gambar_user" id="gambar_user" value="{{ $user->gambar_user }}"
                            enabled>
                        @error('gambar_user')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" placeholder="nisn"
                            name="nisn" id="nisn" value="{{ $user->nisn }}" enabled>
                        @error('nisn')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Password Baru</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="password" name="password" id="password" enabled>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Roles ID</label>
                    <div class="col-sm-9">
                        <select class="col-sm-12 col-form-label rounded-2" name="roles_id" id="roles_id" enabled>
                            <option value="" selected>Pilih</option>
                            <option value="1" {{ $user->roles_id == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $user->roles_id == 2 ? 'selected' : '' }}>Anggota</option>
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
    <!--./Edit user-->

@endsection
