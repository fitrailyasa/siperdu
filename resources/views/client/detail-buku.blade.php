@extends('layouts.client.app')

@section('title', 'Detail Buku')

@section('textCollection', 'text-success')

@section('content')

    <!-- Detail Buku -->
    <div class="col-lg-12 col-lg-12 form-wrapper" id="detail-buku">
        <div class="card m-4 p-4">
            <div class="d-flex justify-content-around">
                <div>
                    <img class="img img-fluid rounded" width="300" src="{{ asset('assets/images') }}/{{ $buku->sampul }}"
                        alt="{{ $buku->judul }}">
                </div>
                <div>
                    <h4 class="card-title">{{ $buku->judul }}</h4>
                    <p class="card-text"><b>Oleh</b> {{ $buku->penulis ?? 'Penulis Tidak Tersedia' }}</p>
                    <p class="card-text"><b>Penerbit</b> {{ $buku->penerbit->nama ?? 'Penerbit Tidak Tersedia' }}</p>
                    <p class="card-text fw-bold"><b>ISBN</b> {{ $buku->isbn ?? 'ISBN Tidak Tersedia' }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Detail Buku -->

@endsection
