@extends('layouts.client.app')

@section('title', 'Koleksi Buku')

@section('textCollection', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/collection.png') }}" width="1150" alt="collection">
    </div>

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

        <h3 class="text-dark font-weight-bold p-3 mx-3">Buku Terbaru</h3>
        <div class="row m-3">
            @php $count = 0; @endphp
            @foreach ($bukus as $buku)
                @if ($count < 6)
                    <div class="col-xl-2 col-md-6 col-6 mb-3">
                        <a class="text-decoration-none" href="{{ route('detail-buku', $buku->id) }}">
                            <div class="card text-start rounded-4">
                                <div class="text-center p-2">
                                    @if ($buku->sampul)
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images') }}/{{ $buku->sampul }}"
                                            alt="{{ $buku->judul }}">
                                    @else
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/default.jpg') }}" alt="{{ $buku->judul }}">
                                    @endif
                                </div>
                                <div class="p-3 border-top">
                                    <h4 class="card-title">{{ $buku->judul }}</h4>
                                    <p class="card-text fw-bold">{{ $buku->kategori->nama }}</p>
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
                                            src="{{ asset('assets/images') }}/{{ $buku->sampul }}"
                                            alt="{{ $buku->judul }}">
                                    @else
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/default.jpg') }}" alt="{{ $buku->judul }}">
                                    @endif
                                </div>
                                <div class="p-3 border-top">
                                    <h4 class="card-title">{{ $buku->judul }}</h4>
                                    <p class="card-text fw-bold">{{ $buku->kategori->nama }}</p>
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
                                            src="{{ asset('assets/images') }}/{{ $buku->sampul }}"
                                            alt="{{ $buku->judul }}">
                                    @else
                                        <img height="280" class="img img-fluid"
                                            src="{{ asset('assets/images/default.jpg') }}" alt="{{ $buku->judul }}">
                                    @endif
                                </div>
                                <div class="p-3 border-top">
                                    <h4 class="card-title">{{ $buku->judul }}</h4>
                                    <p class="card-text fw-bold">{{ $buku->kategori->nama }}</p>
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
