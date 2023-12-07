@extends('layouts.client.app')

@section('title', 'Login')

@section('content')
    <div class="card col-md-4 mx-auto my-5 p-5 border border-success">
        <h3 class="text-center text-success">MASUK</h3>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <form action="{{ route('login') }}" method="POST" class="">
                @csrf
                <input class="form-control @error('email') is-invalid @enderror" name="email" value="admin@admin.com"
                    required autofocus type="text" name="email" id="email" placeholder="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-group">
                    <input class="form-control @error('password') is-invalid @enderror" name="password" value="password"
                        required type="password" id="password" placeholder="password">
                    <span class="input-group-text" id="eye-toggle">
                        <i class="fas fa-eye" id="eye-icon"></i>
                    </span>
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="form-control btn mt-3 bg-success text-white">Masuk</button>
            </form>
        </div>
    </div>

    <!-- Include FontAwesome library -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeToggle = document.getElementById('eye-toggle');

        eyeToggle.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    </script>
@endsection
