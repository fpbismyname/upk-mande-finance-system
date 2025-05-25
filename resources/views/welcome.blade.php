<x-guest-layout>
    <x-container>
        <div class="flex flex-col gap-8">
            <div class="flex flex-col text-center gap-2">
                <h1 class="font-bold text-xl">{{ Str::ucfirst(Str::replace('_', ' ', config('app.name'))) }}</h1>
                <p class="text-sm">Pinjaman santai, bayar bisa nanti.</p>
            </div>
            <div class="flex flex-row m-auto gap-4">
                @auth
                    @if(auth()->user()->role === 'admin')
                        <x-nav-link href="{{ route('admin') }}">
                            Dashboard
                        </x-nav-link>
                    @elseif (auth()->user()->role === 'user')
                        <x-nav-link href="{{ route('beranda') }}">
                            Mulai pinjaman
                        </x-nav-link>
                    @endif
                @else
                    <x-nav-link href="{{ route('login') }}">
                        Login
                    </x-nav-link>
                    <x-nav-link href="{{ route('register') }}">
                        Register
                    </x-nav-link>
                @endauth
            </div>
        </div>
    </x-container>
</x-guest-layout>