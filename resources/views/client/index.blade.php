@extends('layouts.client.app')

@section('title', 'Beranda')

@section('textHome', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/home.png') }}" width="1150" alt="home">
    </div>

    <div class="text-center" style="background-image: url({{ asset('assets/images/bg-home.png') }})">
        <h3 class="text-white font-weight-bold m-3">STRUKTUR ORGANISASI</h3>
        <img class="img img-fluid" src="{{ asset('assets/images/org.png') }}" width="100%" alt="org">
    </div>

    <div class="px-5 m-5">
        <div class="d-flex">
            <div>
                <h3 class="font-weight-bold">Visi</h3>
                <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, expedita exercitationem
                    iusto corporis
                    repellat repudiandae ipsam, ab quo quae sed in libero blanditiis sunt doloremque provident! Repudiandae
                    explicabo aperiam fugiat.</p>
            </div>
            <div class="text-right">
                <img class="img rounded" src="{{ asset('assets/images/visi.png') }}" width="300" alt="visi">
            </div>
        </div>

        <div class="d-flex">
            <div class="text-left">
                <img class="img rounded" src="{{ asset('assets/images/misi.png') }}" width="300" alt="misi">
            </div>
            <div>
                <h3 class="font-weight-bold">Misi</h3>
                <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, expedita exercitationem
                    iusto corporis
                    repellat repudiandae ipsam, ab quo quae sed in libero blanditiis sunt doloremque provident! Repudiandae
                    explicabo aperiam fugiat.</p>
            </div>
        </div>
    </div>

@endsection
