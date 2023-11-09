@extends('layouts.client.app')

@section('title', 'Kontak')

@section('textContact', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/contact.png') }}" width="1150" alt="contact">
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 order-md-2 column-reverse">
                    <form action="#">
                        <div class="mb-3">
                            <label for="nama">Nama : *</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email : *</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="subjek">Subjek : *</label>
                            <input type="text" id="subjek" name="subjek" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="kategori">Kategori : *</label>
                            <input type="text" id="kategori" name="kategori" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pesan">Pesan : *</label>
                            <textarea name="pesan" id="pesan" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success my-3">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 order-md-1">
                    <h3 class=" font-weight-bold">Contact Us</h3>
                    <div class="mb-4 d-none d-md-block">
                        <h4>Address</h4>
                        <p>Jl. Pulau Pisang No.20, Harapan Jaya, Kec. Sukarame, Kota Bandar Lampung, Lampung 35131</p>
                    </div>
                    <div class="mb-4">
                        <i class="text-success fa-2x fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>nuptk_mtsn2bandarlampung@yahoo.co.id</p>
                    </div>
                    <div class="mb-4">
                        <i class="text-success fa-2x fa fa-phone"></i>
                        <h4>Call Me</h4>
                        <p>0897 9354 264</p>
                    </div>
                    <div class="mb-4">
                        <i class="text-success fa-3x fa-brands fa-whatsapp"></i>
                        <h4>Whatsapp</h4>
                        <p>0897 9354 264</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
