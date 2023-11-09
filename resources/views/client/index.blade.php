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

    <div class="d-flex align-items-center justify-content-center">
        <div class="">
            <div class="d-flex align-items-center flex-wrap">
                <!-- Menggunakan flex-wrap untuk mengatur tampilan pada perangkat kecil -->
                <div class="m-3">
                    <h3 class="font-weight-bold text-right">Visi</h3>
                    <p class="font-weight-bold text-right">Menjadi Sumber Belajar dan Pembelajaran Dalam Lingkungan Madrasah
                        <br>
                        Yang Berilmu dan Berakhlak Mulia
                    </p>
                </div>
                <div class="text-right d-none d-lg-block p-3">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/visi.png') }}" alt="visi">
                    <!-- Menggunakan img-fluid agar gambar responsif -->
                </div>
            </div>

            <div class="d-flex align-items-center flex-wrap">
                <!-- Menggunakan flex-wrap untuk mengatur tampilan pada perangkat kecil -->
                <div class="text-left d-none d-lg-block p-3">
                    <img class="img-fluid rounded" src="{{ asset('assets/images/misi.png') }}" alt="misi">
                    <!-- Menggunakan img-fluid agar gambar responsif -->
                </div>
                <div class="m-3">
                    <h3 class="font-weight-bold">Misi</h3>
                    <ul>
                        <li class="font-weight-bold">Menjadi Perpustakaan Sebagai Jantungnya Pendidikan Madrasah</li>
                        <li class="font-weight-bold">Memberikan Pelayanan Prima (Santun, Ranah, Tegas, Tertib, dan Tangkas)
                        </li>
                        <li class="font-weight-bold">Menjadikan Perpustakaan Sebagai Tempat Belajar Yang Menyenangkan</li>
                        <li class="font-weight-bold">Mewujudkan Budaya Dan Minat Baca Yang Efektif Serta Menyenangkan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
