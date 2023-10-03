@extends('layouts.client.app')

@section('title', 'Login')

@section('content')
    <div class="vh-100 justify-content-center d-flex mb-4 mt-0">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <img src="../assets/img/main-logo.png" style="width: 20rem;" alt="">

            <form action="{{ route('login') }}" method="POST"
                class="d-flex flex-column gap-3 justify-content-center align-items-center w-100">
                @csrf
                <input class="border-0 rounded-3 py-2 px-3 w-75 @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autofocus type="text" name="email" id="email"
                    placeholder="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input class="border-0 rounded-3 py-2 px-3 w-75 @error('password') is-invalid @enderror" name="password"
                    required type="password" id="password" placeholder="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn w-25 my-3 bg-primary text-white">Masuk</button>
            </form>
            <p>Belum punya akun? <a class="" href="{{ route('register') }}">Daftar</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
@endsection
