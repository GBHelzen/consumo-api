<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Artistas -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('artistas.index')" :active="request()->routeIs('artistas.index', 'artistas.store', 'artistas.show')">
                        {{ __('Artistas') }}
                    </x-nav-link>
                </div>

                <!-- Artes -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('artes.index')" :active="request()->routeIs('artes.index', 'artes.store', 'artes.show')">
                        {{ __('Artes') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>
