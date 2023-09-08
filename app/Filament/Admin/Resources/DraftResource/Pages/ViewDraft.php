<?php

namespace App\Filament\Admin\Resources\DraftResource\Pages;

use App\Filament\Admin\Resources\DraftResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDraft extends ViewRecord
{
    protected static string $resource = DraftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
