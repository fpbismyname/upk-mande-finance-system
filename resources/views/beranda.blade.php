<x-app-layout>
    @slot('header_title')
    Beranda
    @endslot
    <x-container>
        <div class="flex-col">
            <h1>Hallo, {{ Auth::user()->name }}</h1>
        </div>
    </x-container>
</x-app-layout>