@extends('layouts.admin.app')

@section('title', 'Detail Rak')

@section('dataBuku', 'active')
@section('kelolaRak', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.rak.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Detail rak -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-rak">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.rak.show', $rak->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kode Rak</label>
                            <input type="number" class="form-control @error('kode_rak') is-invalid @enderror"
                                placeholder="kode_rak" name="kode_rak" id="kode_rak" value="{{ $rak->kode_rak ?? '-' }}"
                                disabled>
                            @error('kode_rak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Nama Rak</label>
                            <input type="text" class="form-control @error('nama_rak') is-invalid @enderror"
                                placeholder="nama_rak" name="nama_rak" id="nama_rak" value="{{ $rak->nama_rak ?? '-' }}"
                                disabled>
                            @error('nama_rak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-right">
                        <a href="{{ route('admin.rak.edit', $rak->id) }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./Detail rak -->

@endsection
