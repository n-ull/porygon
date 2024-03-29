<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Draft') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto mt-8 bg-white rounded-md p-8">
            <form action="{{ route('draft.store') }}" method="POST">
                @csrf

                {{-- Section 1 --}}
                <div class="grid grid-cols-3 space-x-4 h-40">
                    <div class="flex border-2 border-dashed items-center rounded-md justify-center">
                        <input type="file">
                    </div>
                    <div class="col-span-2 space-y-2">
                        {{-- Title --}}
                        <x-text-input class="w-full h-11" name="title" :value="old('title')" placeholder="Pokémon Pruebas"
                            required />

                        {{-- Description --}}
                        <x-textarea-input class="w-full h-2/3 resize-none" placeholder="Ere un imbesil"
                            name="description" :value="old('description')" required></x-textarea-input>
                    </div>
                </div>

                <hr class="my-4">

                {{-- Section 2 --}}
                <div class="mt-4 space-y-2" id="editor">
                    <x-textarea-input rows="8" class="w-full resize-none"
                        placeholder="Características, funciones, etc..." name="content" :value="old('content')"
                        required></x-textarea-input>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
