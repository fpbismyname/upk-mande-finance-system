<div class="w-64 bg-white shadow-md">
    <div class="flex flex-row p-6 font-bold text-xl border-b gap-4">
        <x-application-logo class="w-20"></x-application-logo>
        <h5>
            {{ Str::ucfirst(Str::replace('_', ' ', config('app.name', 'Laravel'))) }}
        </h5>
    </div>
    <nav class="mt-4">
        <x-responsive-nav-link :href="route('dashboard')"
            :active="request()->routeIs('dashboard')">Dashboard</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('kelola_pinjaman')" :active="request()->routeIs('kelola_pinjaman')">Kelola
            pinjaman</x-responsive-nav-link>
        <x-responsive-nav-link :href="route('profile.edit')"
            :active="request()->routeIs('profile.edit')">Profile</x-responsive-nav-link>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left py-2.5 px-4 hover:bg-gray-100 text-gray-700">Logout</button>
        </form>
    </nav>
</div>