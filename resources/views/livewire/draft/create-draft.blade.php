<div>
    <form wire:submit="create">
        {{ $this->form }}

        <x-primary-button type="submit" class="bg-primary hover:bg-primary/50 active:bg-primary mt-4">
            {{ __('Save') }}
        </x-primary-button>
    </form>

    <x-filament-actions::modals />
</div>
