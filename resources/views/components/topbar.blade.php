<nav class="navbar navbar-light bg-white topbar mb-4 static-top">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
        </li>
        <div class="d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset((auth()->user()->avatar) ? 'storage/'.auth()->user()->avatar : 'dist/img/man.png') }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-success small">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>
    </ul>
</nav>