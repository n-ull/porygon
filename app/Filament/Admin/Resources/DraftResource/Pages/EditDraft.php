<?php

namespace App\Filament\Admin\Resources\DraftResource\Pages;

use App\Filament\Admin\Resources\DraftResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDraft extends EditRecord
{
    protected static string $resource = DraftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
