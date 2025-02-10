<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="shrink-0 w-[14rem] h-full bg-gray-800 text-white flex flex-col">
            <h3 class="text-center py-4 text-xl font-semibold">Admin Panel</h3>
            <nav class="flex-grow">
                <a href="news" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">News</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">Rubrics</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white">Users</a>

            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6">
            <h1 class="text-2xl font-bold">Welcome to the Admin Panel</h1>
            <p class="mt-2 text-gray-700">This is the main content area. Customize it as needed.</p>
        </div>
    </div>
</x-app-layout>
