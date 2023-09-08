@php
    $can_edit = request()->routeIs('draft.index');
@endphp

@props(['link', 'author'])

<div
    class="flex flex-col h-full bg-white dark:bg-gray-800 shadow-lg rounded-md overflow-hidden hover:bg-gray-50 transition">
    @if ($can_edit)
        <div class="relative">
            <div class="absolute right-0 top-0 m-4 z-10 cursor-pointer">
                <x-heroicon-s-pencil-square class="text-white drop-shadow-lg hover:text-gray-200 transition" />
            </div>
        </div>
    @endif

    <a href="{{ $link }}">
        <div class="relative">
            <div class="absolute w-full h-full bg-gradient-to-b from-black/40 to-transparent z-0"></div>
            <img src="https://i.imgur.com/or9YGZx.png" class="w-full h-50 object-cover rounded-t-md" />
        </div>
    </a>

    <div class="flex flex-col p-4 flex-grow">
        <a href="{{ $link }}">
            <h2 class="text-xl font-semibold text-secondary hover:underline">{{ $title }}</h2>
        </a>
        <p class="text-gray-500 mt-2 line-clamp-3">{{ $description }}</p>
    </div>


    <hr class="dark:border-gray-900">

    <div class="flex items-end justify-between p-4 mt-auto">
        <div class="flex gap-1 cursor-pointer dark:text-white">
            <x-heroicon-o-eye />
            <p>{{ $views }}</p>
        </div>
        <a class="text-secondary hover:underline" {{ $author->attributes }}>{{ $author }}</a>
    </div>
</div>
