<div class="w-full h-full">
    <div x-data="{openSidebar: true}" class="w-full flex h-full">
        <div  :class="{'translate-x-0': !openSidebar}" class="w-64 bg-slate-600 h-full transform transition ease-in-out fixed md:fixed z-30 duration-200 -translate-x-full md:-translate-x-0">
            Sidebar
            <button class="md:hidden" x-on:click="openSidebar = true">Fechar Sidebar</button>
        </div>
        <div class="flex-1 h-full flex flex-col md:ml-64">
            <header>
                <button x-on:click="openSidebar = false">Abrir Sidebar</button>
            </header>
            <div>
