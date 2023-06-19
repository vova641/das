<?php

namespace App\Filament\Resources\HomeworkResource\Pages;

use App\Filament\Resources\HomeworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewHomework extends ViewRecord
{
    protected static string $resource = HomeworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
