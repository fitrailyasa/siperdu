@extends('layouts.admin.app')

@section('title', 'Detail User')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.user.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @elseif (auth()->user()->roles_id == 2)
        <a href="{{ route('op.user.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!--Detail user-->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-user">
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
                            value="{{ $user->nama }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="email" name="email" id="email"
                            value="{{ $user->email }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">No Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon"
                            id="no_telepon" value="{{ $user->no_telepon }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="password" name="password" id="password"
                            value="{{ $user->password }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Roles</label>
                    <div class="col-sm-9">
                        @if ($user->roles_id == 1)
                            <input class="form-control" name="roles_id" id="roles_id" value="Admin" disabled>
                        @elseif($user->roles_id == 2)
                            <input class="form-control" name="roles_id" id="roles_id" value="Admin" disabled>
                        @elseif($user->roles_id == 3)
                            <input class="form-control" name="roles_id" id="roles_id" value="Member" disabled>
                        @elseif($user->roles_id == 99)
                            <input class="form-control" name="roles_id" id="roles_id" value="Guest" disabled>
                        @endif
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
