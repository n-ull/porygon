<?php

namespace App\Livewire\Draft;

use App\Models\Draft;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class CreateDraft extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\TextInput::make('title')
                ->required(),
                \Filament\Forms\Components\RichEditor::make('content')
                ->required()
            ])
            ->statePath('data')
            ->model(Draft::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Draft::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.draft.create-draft');
    }
}
