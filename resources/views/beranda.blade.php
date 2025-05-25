<x-app-layout>
    <x-container>
        <div class="flex-col">
            <h1>Hallo, {{ Auth::user()->name }}</h1>
        </div>
    </x-container>
</x-app-layout>