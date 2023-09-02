<div class="w-full h-full">
    <div x-data="{openSidebar: true}" class="w-full flex h-full">
        <div x-transition  :class="{'translate-x-0': !openSidebar}" class="w-64 bg-slate-600 h-full transform transition ease-in-out fixed left-0 top-0 bottom-0 max-h-full md:fixed z-30 duration-200 -translate-x-full md:-translate-x-0">
            Sidebar
            <button class="md:hidden" x-on:click="openSidebar = true">Fechar Sidebar</button>
        </div>
        <div x-data="{openLogout: false}" class="flex-1 h-full flex flex-col md:ml-64">
            <header class="bg-gray-50 h-16 md:px-3 px-2 shadow flex items-center justify-between">
                <button x-on:click="openSidebar = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                    </svg>
                </button>
                <button x-on:click="openLogout = !openLogout" class="flex">
                    <span class="mr-1">Edimilson Francisco de Queiroz</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </header>
            <div x-show="openLogout" class="fixed top-12 right-16 w-28 h-20 z-20 bg-slate-400">
                Modal Logout
            </div>
            <div class="bg-gray-300 w-full p-3 py-5  flex flex-1 overflow-y-auto">
