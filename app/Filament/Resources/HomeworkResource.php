<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeworkResource\Pages;
use App\Filament\Resources\HomeworkResource\RelationManagers;
use App\Models\Homework;
use Filament\Forms;
use Closure;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
class HomeworkResource extends Resource
{
    protected static ?string $model = Homework::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Учеьные задания';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(2048)
                                ->reactive()
                                ->afterStateUpdated(function (Closure $set, $state) {
                                    $set('slug', Str::slug($state));
                                }),
                            Forms\Components\TextInput::make('slug')
                                ->required()
                                ->maxLength(2048),
                        ]),
                    Forms\Components\Grid::make(2)
                        ->schema([
                            Forms\Components\FileUpload::make('thumbnail'),
                            Forms\Components\DateTimePicker::make('published_at'),
                            Forms\Components\Toggle::make('active')->inline(false)->onColor('success')
                            ->offColor('danger')->required(),
                        ]),
                ])->columnSpan(8),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')->sortable()->searchable(),
                Tables\Columns\IconColumn::make('active')->sortable()->searchable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')->sortable()->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->sortable()->searchable()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomework::route('/'),
            'create' => Pages\CreateHomework::route('/create'),
            'view' => Pages\ViewHomework::route('/{record}'),
            'edit' => Pages\EditHomework::route('/{record}/edit'),
        ];
    }    
}
