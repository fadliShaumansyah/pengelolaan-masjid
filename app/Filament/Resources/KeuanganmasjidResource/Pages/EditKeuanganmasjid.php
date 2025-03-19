<?php

namespace App\Filament\Resources\KeuanganmasjidResource\Pages;

use App\Filament\Resources\KeuanganmasjidResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeuanganmasjid extends EditRecord
{
    protected static string $resource = KeuanganmasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
