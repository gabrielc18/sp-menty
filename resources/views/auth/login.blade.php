<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <x-auth-card>
    
        {{-- show alert if there is errors --}}
        <x-alert-error/>
        
        <x-slot name="title">
            Silahkan Masuk
        </x-slot>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email field -->
            <x-input type="text" text="Username" name="username" />

            <!-- Password field -->
            <x-input type="password" text="Password" name="password" />
            
            <x-button type="primary btn-block" text="Masuk" for="submit" />
        </form>
        <div class="mt-4 text-center">
            <hr>
            <p class="d-block text-center mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Daftar Sekarang!</a></p>
        </div>
    </x-auth-card>
</x-guest-layout>
