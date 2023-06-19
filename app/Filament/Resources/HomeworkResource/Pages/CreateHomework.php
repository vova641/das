<?php

namespace App\Filament\Resources\HomeworkResource\Pages;

use App\Filament\Resources\HomeworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomework extends CreateRecord
{
    protected static string $resource = HomeworkResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
