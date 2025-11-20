<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeknisiResource\Pages;
use App\Filament\Resources\TeknisiResource\RelationManagers;
use App\Models\Teknisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;

class TeknisiResource extends Resource
{
    protected static ?string $model = Teknisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('no_hp')
                    ->required()
                    ->maxLength(255),
                TextInput::make('keahlian')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('path_foto')
                    ->label('foto')
                    ->image()
                    ->disk('public')
                    ->directory('teknisi_foto')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('no_hp'),
                TextColumn::make('keahlian'),
                ImageColumn::make('path_foto')
                    ->label('foto')
                    ->width(100)
                    ->disk('public'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTeknisis::route('/'),
            'create' => Pages\CreateTeknisi::route('/create'),
            'edit' => Pages\EditTeknisi::route('/{record}/edit'),
        ];
    }
}
