@extends('layouts.client.app')

@section('title', 'Beranda')

@section('textHome', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/home.png') }}" width="1150" alt="home">
    </div>

    <div class="text-center" style="background-image: url({{ asset('assets/images/bg-home.png') }})">
        <h3 class="text-white font-weight-bold py-5">STRUKTUR ORGANISASI</h3>
        <img class="img img-fluid" src="{{ asset('assets/images/org.png') }}" width="100%" alt="org">
    </div>

    <div class="px-5 m-5">
        <div class="d-flex align-items-center">
            <div class="m-3">
                <h3 class="font-weight-bold text-right">Visi</h3>
                <p class="font-weight-bold text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque,
                    expedita
                    exercitationem
                    iusto corporis
                    repellat repudiandae ipsam, ab quo quae sed in libero blanditiis sunt doloremque provident! Repudiandae
                    explicabo aperiam fugiat.</p>
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
                    <li class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
