<x-guest-layout>
    <x-slot name="title">
        Registrasi
    </x-slot>

    <x-auth-card>
    
        {{-- pemberitahuan error --}}
        <x-alert-error/>

        <x-slot name="title">
            Silahkan Mendaftar
        </x-slot>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <!-- Name field -->
            <x-input type="text" text="Nama" name="name" />

            <!-- Email field -->
            <x-input type="text" text="Username" name="username" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />

            <!-- Password confirmation field -->
            <x-input type="password" text="Konfirmasi Password" name="password_confirmation" />
            
            <x-button type="primary btn-block" text="Daftar" for="submit" />
        </form>
        <div class="text-center mt-4">
            <hr>
            <p class="d-block text-center mt-3">Sudah punya akun? <a class="font-weight-bold small" href="{{ route('login') }}">Masuk Disini</a></p>
        </div>
    </x-auth-card>
</x-guest-layout>
