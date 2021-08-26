<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Criar Dica') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                Estamos inserindo

                <form method="POST" action="{{ route('create') }}">

                    @csrf

                    <div class="mt-5 inline-flex items-center">
                        <x-label for="type" :value="__('Tipo')" />

                        <x-input id="type" class="block mt-1 ml-3 w-full" type="text" name="type" :value="old('type')" required autofocus />
                    </div>
                    <div class="ml-4 inline-flex items-center">
                        <x-label for="brand" :value="__('Marca')" />

                        <x-input id="brand" class="block mt-1 ml-3 w-full" type="text" name="brand" :value="old('brand')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-3">
                            {{ __('Confirmar') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</x-app-layout>
