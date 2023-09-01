<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Draft Index') }}
        </h2>
    </x-slot>

    <div>
        <x-box>
            @forelse ($drafts as $draft)
                <div class="flex justify-between">
                    <div>
                        <a href="{{ route('draft.show', $draft) }}" class="text-blue-500 hover:underline">
                            {{ $draft->title }}
                        </a>
                    </div>
                </div>
            @empty
                <div class="text-center">
                    <p class="text-gray-500 dark:text-gray-400">
                        No drafts yet.
                    </p>
                </div>
            @endforelse
        </x-box>
    </div>
</x-app-layout>
