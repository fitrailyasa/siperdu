@extends('layouts.admin.app')

@section('title', 'Edit Rak')

@section('dataBuku', 'active')
@section('kelolaRak', 'active')

@section('backlink')
    @if (auth()->user()->roles_id == 1)
        <a href="{{ route('admin.rak.index') }}"><i class="fa small pr-1 fa-arrow-left text-dark"></i></a>
    @endif
@endsection

@section('content')

    <!-- Edit rak -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="edit-rak">
        <div class="card">
            <div class="card-body">
                @if (auth()->user()->roles_id == 1)
                    <form method="POST" action="{{ route('admin.rak.update', $rak->id) }}" enctype="multipart/form-data">
                @endif
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Rak</label>
                            <input type="text" class="form-control @error('rak') is-invalid @enderror" placeholder="rak"
                                name="rak" id="rak" value="{{ $rak->rak }}" required>
                            @error('rak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Baris</label>
                            <input type="number" class="form-control @error('baris') is-invalid @enderror"
                                placeholder="baris" name="baris" id="baris" value="{{ $rak->baris }}" required>
                            @error('baris')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id"
                                id="kategori_id" required>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}"
                                        {{ $rak->kategori_id == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama }}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
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
    <!-- ./Edit rak -->

@endsection
