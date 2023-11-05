@extends('layouts.client.app')

@section('title', 'Kontak')

@section('textContact', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/contact.png') }}" width="1150" alt="contact">
    </div>

    <div>
        <div class="d-flex justify-content-around my-5 mx-3">
            <div class="col-md-5">
                <h3 class=" font-weight-bold">Contact Us</h3>
                <h4 class="">Address</h4>
            </div>
            <div class="col-md-7">
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
        </div>
    </div>

@endsection
