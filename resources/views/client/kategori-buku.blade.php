@extends('layouts.client.app')

@section('title', 'Kategori Buku')

@section('textCollection', 'text-success')

@section('content')

    <style>
        /* Add your custom styles here */
        .image-container {
            position: relative;
            text-align: center;
        }

        .text-on-image {
            position: absolute;
            top: 88%;
            left: 40%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 15px;
        }
    </style>

    <h3 class="text-dark font-weight-bold p-3 mx-3">Kategori Buku {{ $kategoris->nama }}</h3>
    <div class="row m-3">
        @foreach ($bukus as $buku)
            <div class="col-xl-2 col-md-6 col-6 mb-3">
                <a class="text-decoration-none" href="{{ route('detail-buku', $buku->id) }}">
                    <div class="card text-start rounded-4">
                        <div class="text-center p-2">
                            @if ($buku->sampul)
                                <img height="280" class="img img-fluid"
                                    src="{{ asset('assets/images/buku') }}/{{ $buku->sampul }}" alt="{{ $buku->judul }}">
                            @else
                                <img height="280" class="img img-fluid"
                                    src="{{ asset('assets/images/buku/default.jpg') }}" alt="{{ $buku->judul }}">
                            @endif
                        </div>
                        <div class="text-on-image">
                            <h4 class="card-title small font-weight-bold">{{ $buku->judul }}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

@endsection
