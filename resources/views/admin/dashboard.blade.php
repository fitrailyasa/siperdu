@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('activeDashboard', 'active')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $bukus }}</h3>

                    <p>Buku</p>
                </div>
                <a href="{{ route('admin.buku.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $kategoris }}</h3>

                    <p>Kategori</p>
                </div>
                <a href="{{ route('admin.kategori.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $raks }}</h3>

                    <p>Rak</p>
                </div>
                <a href="{{ route('admin.rak.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $users }}</h3>

                    <p>Anggota</p>
                </div>
                <a href="{{ route('admin.user.index') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
