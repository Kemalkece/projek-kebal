<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceOrderResource\Pages;
use App\Models\ServiceOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceOrderResource extends Resource
{
    protected static ?string $model = ServiceOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pesanan Service';
    protected static ?string $pluralModelLabel = 'Pesanan Service';
    protected static ?string $modelLabel = 'Pesanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Nama'),

                Forms\Components\TextInput::make('telepon')
                    ->required()
                    ->label('Nomor Telepon'),

                Forms\Components\TextInput::make('paket')
                    ->required()
                    ->label('Paket'),

                Forms\Components\Textarea::make('catatan')
                    ->label('Catatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('telepon')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('paket')
                    ->badge()
                    ->color('primary')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Masuk')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->filters([
                // Tambah filter bila perlu
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceOrders::route('/'),
            'create' => Pages\CreateServiceOrder::route('/create'),
            'edit' => Pages\EditServiceOrder::route('/{record}/edit'),
        ];
    }
}

