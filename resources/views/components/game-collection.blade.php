<div>
    <div {{ $attributes->merge(['class' => 'grid grid-cols-1 md:grid-cols-4 gap-4']) }}>
        @foreach ($drafts as $draft)
            <x-game-card :link="route('draft.show', $draft)">
                <x-slot name="title">{{ $draft->title }}</x-slot>
                <x-slot name="description">{{ $draft->description }}</x-slot>
                <x-slot:author
                    href="{{ route('profile.visit', $draft->user) }}">&#64;{{ $draft->user->name }}</x-slot>
                <x-slot:views>{{ $draft->views }}</x-slot:views>
            </x-game-card>
        @endforeach
        {{ $slot }}
    </div>

    @if ($drafts instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="block my-2">
            {{ $drafts->links() }}
        </div>
    @endif
</div>
