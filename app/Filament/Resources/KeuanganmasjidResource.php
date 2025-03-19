<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeuanganmasjidResource\Pages;
use App\Filament\Resources\KeuanganmasjidResource\RelationManagers;
use App\Models\Keuanganmasjid;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class KeuanganmasjidResource extends Resource
{
    protected static ?string $model = Keuanganmasjid::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form {
        return $form->schema([
        DatePicker::make('tanggal_transaksi')->required(),
        Select::make('jenis_transaksi')->options([
        'Pemasukan' => 'Pemasukan',
        'Pengeluaran' => 'Pengeluaran',
        ])->required(),
        TextInput::make('kategori')->required()->maxLength(255),
        TextInput::make('jumlah')->numeric()->required(),
        Textarea::make('keterangan')->required(),
        FileUpload::make('bukti_transaksi')->nullable(),
        ]);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal_transaksi')->date(),
                BadgeColumn::make('jenis_transaksi')->colors([
                'Pemasukan' => 'success',
                'Pengeluaran' => 'danger',
                ]),

                TextColumn::make('kategori')->sortable()->searchable(),
                TextColumn::make('jumlah')->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            
            ])
            ->filters([
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
            'index' => Pages\ListKeuanganmasjids::route('/'),
            'create' => Pages\CreateKeuanganmasjid::route('/create'),
            'edit' => Pages\EditKeuanganmasjid::route('/{record}/edit'),
        ];
    }
}
