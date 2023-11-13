@extends('layouts.client.app')

@section('title', 'Koleksi Buku')

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

    <div>
        <h3 class="text-center text-dark font-weight-bold py-3">Collection</h3>
        <form action="{{ route('search') }}" method="GET">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6 input-group mb-3">
                    <input type="text" class="form-control" name="query" placeholder="Cari Buku"
                        value="{{ request('query') }}">
                    <button class="btn w-25 text-white" style="background-color: #b1e409;" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <div class="row m-3">
            @php $count = 0; @endphp
            @foreach ($kategoris as $kategori)
                @if ($count < 9)
                    <div class="col-xl-2 col-md-3 col-4 mb-3">
                        <a class="text-decoration-none" href="{{ route('kategori-buku', $kategori->id) }}">
                            <div class="card text-start rounded-4">
                                <div class="image-container text-center p-2">
                                    @if ($kategori->gambar)
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/kategori') }}/{{ $kategori->gambar }}"
                                            alt="{{ $kategori->nama }}">
                                    @else
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/kategori/default.jpg') }}"
                                            alt="{{ $kategori->nama }}">
                                    @endif
                                </div>
                                <div class="text-on-image">
                                    <h4 class="card-title small font-weight-bold">{{ $kategori->nama }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    @php $count++; @endphp
                @endif
            @endforeach
        </div>

        <h3 class="text-dark font-weight-bold p-3 mx-3">Agama</h3>
        <div class="row m-3">
            @php $count = 0; @endphp
            @foreach ($bukus->where('kategori_id', 1) as $buku)
                @if ($count < 6)
                    <div class="col-xl-2 col-md-6 col-6 mb-3">
                        <a class="text-decoration-none" href="{{ route('detail-buku', $buku->id) }}">
                            <div class="card text-start rounded-4">
                                <div class="text-center p-2">
                                    @if ($buku->sampul)
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/buku') }}/{{ $buku->sampul }}"
                                            alt="{{ $buku->judul }}">
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
                    @php $count++; @endphp
                @endif
            @endforeach
        </div>

        <h3 class="text-dark font-weight-bold p-3 mx-3">Karya Umum</h3>
        <div class="row m-3">
            @php $count = 0; @endphp
            @foreach ($bukus->where('kategori_id', 5) as $buku)
                @if ($count < 6)
                    <div class="col-xl-2 col-md-6 col-6 mb-3">
                        <a class="text-decoration-none" href="{{ route('detail-buku', $buku->id) }}">
                            <div class="card text-start rounded-4">
                                <div class="text-center p-2">
                                    @if ($buku->sampul)
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/buku') }}/{{ $buku->sampul }}"
                                            alt="{{ $buku->judul }}">
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
                    @php $count++; @endphp
                @endif
            @endforeach
        </div>

    </div>

@endsection
