<?php

namespace App\Filament\Admin\Resources\DraftResource\Pages;

use App\Filament\Admin\Resources\DraftResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDraft extends CreateRecord
{
    protected static string $resource = DraftResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['slug'] = \Str::slug($data['title']);

        return $data;
    }
}
