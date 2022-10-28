<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Clientes') }}
            </h2>

            <button class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500"
            x-data x-on:click="window.livewire.emitTo('csv-importer', 'toggle')">Importar arquivos</button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="space-y-1">
                        @foreach ($customers as $customer)
                            <div>
                                {{ $customer->id }}. {{ $customer->first_name }} {{ $customer->last_name }} {{ $customer->company }}
                            </div>
                        @endforeach
                    </div>
                    <livewire:csv-importer :model="App\Models\Customer::class" :columnsToMap="['id', 'first_name', 'last_name', 'company']" :requiredColumns="['id', 'first_name', 'last_name', 'company']" :columnLabels="['id' => 'ID', 'first_name' => 'First Name', 'last_name'=> 'Last Name', 'company'=> 'Company']"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
