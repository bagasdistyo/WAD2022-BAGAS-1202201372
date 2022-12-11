@extends('app')

@section('content')

@auth
<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav" style="padding-left: 100px;">
                    <a style="color: white;" class="nav-link active" aria-current="page"
                        href="{{ route('home') }}">Home</a>
                    <a class="nav-link" style="padding-left: 35px; padding-right:900px;color: white;" 
                        href="">MyCar</a>
                        <!-- listcar -->
                </div>
                <a class="btn btn-light" style="font-color:blue;" role="button"
                    href="/product/create">Add Car</a>
                <div class="dropdown" style="padding-left: 30px;">
                    <a class="btn btn-light dropdown-toggle" style="font-color:blue;" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Bagas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Profile</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col">
            <div>
                <h1 style="padding-top: 25px; font-size:50px;">Selamat Datang Di Showroom</h1>
            </div>
            <div style="padding-top: 10px;">
                <a>Bienvenido a la sala de exhibición de bagas, ofrecemos una gran selección de autos, desde los precios más baratos hasta los más caros</a>
            </div>
            <div style="padding-top: 30px;">
                <a class="btn btn-primary" href="" role="button">MyCar</a>
            </div>
            <div style="padding-top: 50px;">
            
                <img src="/MODUL4 BAGAS/asset/image/Logo-EAD.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                <a style="padding-left: 30px;">Bagas_1202201372</a>
            </div>
        </div>
        <div class="col">
            <img src="/MODUL4 BAGAS/asset/image/Mercedes.jpeg" alt="Mercedes">
        </div>       
  </div>
@endauth
@guest
<nav class="navbar navbar-expand-lg bg-primary">
<div class="container-fluid">
  <div class="collapse navbar-collapse">
    <div class="navbar-nav" style="padding-left: 100px;">
      <a style="color: white; padding-right:1200px;" class="nav-link active" aria-current="page" href="index.php">Home</a>
      <a style="color: white;" class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
    </div>
  </div>
</div>
</nav>

<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col">
            <div>
                <h1 style="padding-top: 25px; font-size:50px;">Selamat Datang Di Showroom</h1>
            </div>
            <div style="padding-top: 10px;">
                <a>Bienvenido a la sala de exhibición de bagas, ofrecemos una gran selección de autos, desde los precios más baratos hasta los más caros</a>
            </div>
            <div style="padding-top: 100px;">
            
                <img src="/MODUL4 BAGAS/asset/image/Logo-EAD.png" class="card-img-top" alt="Logo EAD" style="width: 100px">
                <a style="padding-left: 30px;">Bagas_1202201372</a>
            </div>
        </div>
        <div class="col">
            <img src="/MODUL4 BAGAS/asset/image/Mercedes.jpeg" alt="Mercedes">
        </div>       
  </div>
@endguest

@endsection