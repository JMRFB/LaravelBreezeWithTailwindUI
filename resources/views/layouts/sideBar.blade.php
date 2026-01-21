
<div id="overlay"
     class="fixed inset-0 bg-black/50 hidden z-10 md:hidden">
</div>

<aside id="sideBar" class="z-10 bg-blue-800 text-blue-100 w-64 px-2 py-4 
    fixed top-0 inset-y-0 left-0 transform -translate-x-full md:translate-x-0
    overflow-y-auto transition ease-in-out duration-300 shadow-lg">
    
    <!-- logo -->
    <div class="flex items-center justify-between px-2">
        <div class="flex items-center gap-2"> 
            <a href="">
                @include('components.application-logo')
            </a>
            <span class="text-2xl font-extra-bold">
                Admin
            </span>
        </div>
        <button type="button" id="closeSideBar" class="md:hidden inline-flex p-2 items-center justify-center rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Nav Links -->
    <nav class="mt-4 flex flex-col gap-2">
        <x-side-nav-link href="{{ URL('dashboard') }}" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-side-nav-link>
        <x-side-nav-link href="{{ URL('features') }}" :active="request()->routeIs('features')">
            Features
        </x-side-nav-link>
        <x-side-nav-link href="{{ URL('about') }}" :active="request()->routeIs('about')">
            About
        </x-side-nav-link>
        <x-side-nav-link href="{{ URL('contact') }}" :active="request()->routeIs('contact')">
            Contact
        </x-side-nav-link>
    </nav>
</aside>