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
                @markdown($draft->content)
                <div class="justify-self-center">Images</div>
            </div>

            <div x-data="{ open: false }" class="mt-4">
                <button @click="open = !open" class="bg-gray-300/30 w-full p-2">
                    Show more info
                </button>
                <div x-show="open" x-transition:enter="transition ease-out origin-top-left duration-200"
                    x-transition:enter-start="opacity-0 transform scale-90"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition origin-top-left ease-in duration-100"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-90" class="p-4 bg-gray-300/75 text-left">
                    <ul>
                        <li>Published: <x-heroicon-o-clock class="inline-block h-4 w-4" /> {{$draft->created_at->diffForHumans()}}</li>
                        <li>Category: {{$draft->category->name ?? 'None'}}</li>
                        <li>Author: <a href="{{route('profile.visit', $draft->user)}}" class="text-secondary hover:underline">&#64;{{$draft->user->username}}</a></li>
                    </ul>
                </div>
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
