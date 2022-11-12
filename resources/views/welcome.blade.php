<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="dicoding:email" content="gabrielcwdo18@gmail.com">
        <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <title>SP MenTy - Sistem Pakar Mental Healthy</title>
    </head>
    <body class="antialiased">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/icon.png') }}" alt="icon" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @if (Request::is('/'))
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#fitur">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">FAQ</a>
                        </li>
                    @endif
                    @auth
                        <div class="btn-group username">
                            <button type="button" class="btn btn-transparent dropdown-toggle ps-0" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Selamat Datang {{ auth()->user()->name }}<div class="btn-group">
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                @if (auth()->user()->is_warga)
                                    <li><a class="dropdown-item" href="dashboard/warga/profile/index"><i
                                                class="bi bi-laptop"></i><span class="ms-2">Dashboard</span></a>
                                    </li>
                                @elseif(auth()->user()->is_admin)
                                    <li><a class="dropdown-item" href="/dashboard/admin/penerima"><i
                                                class="bi bi-laptop"></i><span class="ms-2">Dashboard</span></a>
                                    </li>
                                @endif
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="bi bi-box-arrow-right"></i><span
                                                class="ms-2">Keluar</span></button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <ul class="nav-item d-flex p-0 ms-5 authentication">
                            <li class="list-group">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="list-group ms-2">
                                <a href="/register"
                                    class="nav-link text-center bg-primary text-white rounded-pill border registration px-3">Registrasi</a>
                            </li>
                        </ul>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
    </body>
</html>
