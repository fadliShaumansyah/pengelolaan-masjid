<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalKegiatanResource\Pages;
use App\Filament\Resources\JadwalKegiatanResource\RelationManagers;
use App\Models\JadwalKegiatan; // Pastikan nama model benar
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
use Filament\Tables\Columns\DateColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Tables\Filters\EnumColumn;
use Filament\Tables\Column\BadgeColumn;
use Carbon\Carbon;

class JadwalKegiatanResource extends Resource
{
    protected static ?string $model = JadwalKegiatan::class; // Perbaiki nama model di sini

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kegiatan')
                ->required()
                ->label('Nama Kegiatan'),
            
            Forms\Components\Textarea::make('deskripsi')
                ->required()
                ->label('Deskripsi'),
            
            Forms\Components\DatePicker::make('tanggal_mulai')
                ->required()
                ->label('Tanggal Mulai'),
            
            Forms\Components\DatePicker::make('tanggal_selesai')
                ->required()
                ->label('Tanggal Selesai'),

            Forms\Components\TimePicker::make('waktu_mulai')
                ->required()
                ->label('waktu mulai'),

            Forms\Components\TimePicker::make('waktu_selesai')
                ->required()
                ->label('waktu Selesai'),

                Forms\Components\Select::make('status')
                ->options([
                    'Aktif' => 'Aktif',
                    'Selesai' => 'Selesai',
                    'Dibatalkan' => 'DiBatalkan',
                ])
                ->required()
                ->label('Status'),

            Forms\Components\TextInput::make('lokasi')
                ->required()
                ->label('Tempat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kegiatan')->label('Nama Kegiatan'),
                TextColumn::make('deskripsi')->label('Deskripsi'),
                TextColumn::make('tanggal_mulai')->label('Waktu Mulai')->DateTime(),
                TextColumn::make('tanggal_selesai')->label('Waktu Selesai'),
                TextColumn::make('waktu_mulai')->label('Waktu Selesai'),
                TextColumn::make('waktu_selesai')->label('Waktu Selesai'),
                TextColumn::make('status')->label('Jenis Kegiatan'),
                TextColumn::make('lokasi')->label('Tempat'),
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
            'index' => Pages\ListJadwalKegiatans::route('/'),
            'create' => Pages\CreateJadwalKegiatan::route('/create'),
            'edit' => Pages\EditJadwalKegiatan::route('/{record}/edit'),
        ];
    }
}
