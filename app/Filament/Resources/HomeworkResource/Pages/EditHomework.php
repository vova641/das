<?php

namespace App\Filament\Resources\HomeworkResource\Pages;

use App\Filament\Resources\HomeworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomework extends EditRecord
{
    protected static string $resource = HomeworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
    protected function getPreviewModalView(): ?string
    {
        return 'homework-show';
    }

    protected function getPreviewModalDataRecordKey(): ?string
    {
        return 'homework';
    }
}
