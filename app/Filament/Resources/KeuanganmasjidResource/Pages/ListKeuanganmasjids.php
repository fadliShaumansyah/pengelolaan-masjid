<?php

namespace App\Filament\Resources\KeuanganmasjidResource\Pages;

use App\Filament\Resources\KeuanganmasjidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeuanganmasjids extends ListRecords
{
    protected static string $resource = KeuanganmasjidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
