<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JamaahResource\Pages;
use App\Filament\Resources\JamaahResource\RelationManagers;
use App\Models\Jamaah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\Filter;

class JamaahResource extends Resource
{
    protected static ?string $model = Jamaah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
->label('Nama Jamaah')
->required()
->maxLength(255),
TextInput::make('alamat')
->label('Alamat')
->required()
->maxLength(255),
TextInput::make('nomor_hp')
->label('Nomor HP')
->numeric()
->required(),
Select::make('status')
->label('Status')
->options([
'Aktif' => 'Aktif',
'Tidak Aktif' => 'Tidak Aktif',
])
->default('Aktif')
->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
        TextColumn::make('nama')->sortable()->searchable()->label('Nama
        Jamaah'),
        TextColumn::make('alamat')->label('Alamat'),
        TextColumn::make('nomor_hp')->label('Nomor HP'),
        BadgeColumn::make('status')
        ->label('Status')
        ->colors([
        'success' => 'Aktif',
        'danger' => 'Tidak Aktif',
        ]),
        ])
        ->filters([
        Filter::make('status')
        ->query(fn(Builder $query): Builder =>
        $query->where('status', 'Aktif')),
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
            'index' => Pages\ListJamaahs::route('/'),
            'create' => Pages\CreateJamaah::route('/create'),
            'edit' => Pages\EditJamaah::route('/{record}/edit'),
        ];
    }
}
