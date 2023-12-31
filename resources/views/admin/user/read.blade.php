@extends('layouts.admin.app')

@section('title', 'Detail Anggota')

@section('dataUser', 'active')
@section('kelolaUser', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.user.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!--Detail user-->
    <div class="col-lg-12 form-wrapper" id="detail-user">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.user.show', $user->id) }}" enctype='multipart/form-data'>
                @endif
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Gambar User</label>
                    <div class="col-sm-9">
                        <img src="{{ asset('assets/images/') }}/{{ $user->gambar_user }}" alt="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="nama" name="nama" id="nama"
                            value="{{ $user->nama ?? '-' }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="email" name="email" id="email"
                            value="{{ $user->email ?? '-' }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">NISN</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="nisn" name="nisn" id="nisn"
                            value="{{ $user->nisn ?? '-' }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Roles</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="roles" name="roles" id="roles"
                            value="{{ $user->roles->roles ?? '-' }}" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="text-right">
                        <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--./Detail user-->

@endsection
