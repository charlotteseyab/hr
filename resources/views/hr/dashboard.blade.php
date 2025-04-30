<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HR Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold mb-4">HR Management Tools</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- HR-specific features -->
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium">Employee Management</h4>
                            <p class="text-sm text-gray-600">Manage employee records, performance, and documentation</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium">Recruitment</h4>
                            <p class="text-sm text-gray-600">View and manage job applications and candidates</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-medium">Reports</h4>
                            <p class="text-sm text-gray-600">Generate HR reports and analytics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 