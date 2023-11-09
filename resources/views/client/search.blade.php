@extends('layouts.client.app')

@section('title', 'Hasil Pencarian')

@section('textCollection', 'text-success')

@section('content')

    <h3 class="text-dark font-weight-bold p-3 mx-3">Hasil Pencarian</h3>
    <div class="row m-3">
        @foreach ($bukus as $buku)
            <div class="col-xl-2 col-md-6 col-6 mb-3">
                <a class="text-decoration-none" href="{{ route('detail-buku', $buku->id) }}">
                    <div class="card text-start rounded-4">
                        <div class="text-center p-2">
                            @if ($buku->sampul)
                                <img height="280" class="img img-fluid"
                                    src="{{ asset('assets/images') }}/{{ $buku->sampul }}" alt="{{ $buku->judul }}">
                            @else
                                <img height="280" class="img img-fluid" src="{{ asset('assets/images/default.jpg') }}"
                                    alt="{{ $buku->judul }}">
                            @endif
                        </div>
                        <div class="p-3 border-top">
                            <h4 class="card-title">{{ $buku->judul ?? '-' }}</h4>
                            <p class="card-text fw-bold">{{ $buku->kategori->nama ?? '-' }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
