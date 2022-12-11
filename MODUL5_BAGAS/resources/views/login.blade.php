@extends('app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col">
            <img src="/MODUL4 BAGAS/asset/image/Ferrari 458.jpg" style="padding-top: 180px;" alt="Tesla">
        </div>
        <div class="col" style="padding-top: 180px;">
        <h3><b>Login</b></h3>
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3" style="padding-top: 20px;">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" name="email" id="email" type="email">
            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="remember" name="remember"id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember Me
                </label>
            </div>
            </div>
            <div style="padding-top: 10px;">
                <button type="submit" class="btn btn-primary" role="button" name="Login">Login</button>
            </div>
            <div>
                <a> Anda belum punya akun ? </a>
                <a href="{{ route('register') }}">Daftar</a>
            </div>

@endsection
