@extends('layouts.client.app')

@section('title', 'Beranda')

@section('textHome', 'text-success')

@section('content')

    <div class="text-center my-3">
        <img class="img img-fluid rounded" src="{{ asset('assets/images/home.png') }}" width="1150" alt="home">
    </div>

@endsection
