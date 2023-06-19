<?php

namespace App\Filament\Resources\HomeworkResource\Pages;

use App\Filament\Resources\HomeworkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomework extends ListRecords
{
    protected static string $resource = HomeworkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
