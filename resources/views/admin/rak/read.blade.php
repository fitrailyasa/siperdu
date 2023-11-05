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
                            <label class="form-label">Rak</label>
                            <input type="text" class="form-control @error('rak') is-invalid @enderror" placeholder="rak"
                                name="rak" id="rak" value="{{ $rak->rak }}" disabled>
                            @error('rak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Baris</label>
                            <input type="number" class="form-control @error('baris') is-invalid @enderror"
                                placeholder="baris" name="baris" id="baris" value="{{ $rak->baris }}" disabled>
                            @error('baris')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="number" class="form-control @error('kategori_id') is-invalid @enderror"
                                placeholder="kategori_id" name="kategori_id" id="kategori_id"
                                value="{{ $rak->kategori_id }}" disabled>
                            @error('kategori_id')
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
