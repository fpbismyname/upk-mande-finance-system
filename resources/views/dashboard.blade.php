<x-app-layout>
    @slot('header_title')
    Dashboard
    @endslot
    <x-container>
        <h1>Hallo {{ auth()->user()->name }}</h1>
    </x-container>
</x-app-layout>