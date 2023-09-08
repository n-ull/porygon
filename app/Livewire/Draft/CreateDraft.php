<?php

namespace App\Livewire\Draft;

use App\Models\Category;
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
                \Filament\Forms\Components\TextInput::make('description')
                    ->required(),
                \Filament\Forms\Components\Textarea::make('content')
                    ->placeholder('Write your draft here...')
                    ->required(),
                \Filament\Forms\Components\Select::make('category_id')
                    ->name('Category')
                    ->nullable()
                    ->options(Category::all()->pluck('name', 'id')),
                \Filament\Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->disk('local')
                    ->directory('thumbnails')
            ])
            ->statePath('data')
            ->model(Draft::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        dd($data);
        $data['user_id'] = auth()->id();
        $data['slug'] = \Str::slug($data['title']);

        $record = Draft::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.draft.create-draft');
    }
}
