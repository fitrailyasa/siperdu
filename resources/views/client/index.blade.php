@extends('layouts.client.app')

@section('title', 'Beranda')

@section('textHome', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/home.png') }}" width="1150" alt="home">
    </div>

    <div class="text-center" style="background-image: url({{ asset('assets/images/bg-home.png') }})">
        <h3 class="text-white font-weight-bold py-5">STRUKTUR ORGANISASI</h3>
        @foreach ($strukturs as $struktur)
            <img class="img img-fluid" width="100%" src="{{ asset('assets/struktur') }}/{{ $struktur->gambar }}"
                alt="">
        @endforeach
    </div>

    <div class="px-5 m-5">
        <div class="d-flex align-items-center">
            <div class="m-3">
                <h3 class="font-weight-bold text-right">Visi</h3>
                <p class="font-weight-bold text-right">Menjadi Sumber Belajar dan Pembelajaran Dalam Lingkungan Madrasah
                    Yang Berilmu dan Berakhlak Mulia</p>
            </div>
            <div class="text-right">
                <img class="img rounded" src="{{ asset('assets/images/visi.png') }}" width="300" alt="visi">
            </div>
        </div>

        <div class="d-flex align-items-center">
            <div class="text-left">
                <img class="img rounded" src="{{ asset('assets/images/misi.png') }}" width="300" alt="misi">
            </div>
            <div class="m-3">
                <h3 class="font-weight-bold">Misi</h3>
                <ul>
                    <li class="font-weight-bold">Menjadi Perpustakaan Sebagai Jantungnya Pendidikan Madrasah</li>
                    <li class="font-weight-bold">Memberikan Pelayanan Prima ( Santun, Ranah, Tegas, Tertib, dan Tangkas)
                    </li>
                    <li class="font-weight-bold">Menjadikan Perpustakaan Sebagai Tempat Belajar Yang Menyenangkan</li>
                    <li class="font-weight-bold">Mewujudkan Budaya Dan Minat Baca Yang Efektif Serta Menyenangkan</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
