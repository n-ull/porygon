@php
    $theme = [
        'bg-colors' => 'bg-gray-200 dark:bg-gray-800',
    ];
@endphp
<x-app-layout isDraft='true'>
    <div class="{{ $theme['bg-colors'] }} h-screen max-w-4xl mx-auto">
        <div
            class="flex relative bg-[url('https://wallpapers.com/images/hd/pikachu-with-pokemon-friends-uxxa8pvbvsqj0v3h.jpg')] h-48 object-cover justify-center items-center">
            <div class="absolute h-full w-full bg-black/50 z-0"></div>
            @isset($draft->theme->logo)
                SIUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU
            @else
                <h1 class="text-white z-10">{{ $draft->title }}</h1>
            @endisset

        </div>
        <div class="p-6">
            <div class="grid grid-cols-2">
                <div>{{ Markdown::parse($draft->content) }}</div>
                <div class="justify-self-center">Images</div>
            </div>
            <div class="mt-4">
                @if ($draft->shards->count() > 0)
                <div class="bg-gray-300/30 p-2">Draft Shard</div>
                @else
                    <div class="bg-gray-300/30 text-gray-400/50 p-2">This project doesn't have any shard...</div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
