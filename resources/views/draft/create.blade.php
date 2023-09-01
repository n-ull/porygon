<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Draft') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto mt-8 bg-white rounded-md p-8">
            @livewire('draft.create-draft')
        </div>
    </div>
</x-app-layout>
