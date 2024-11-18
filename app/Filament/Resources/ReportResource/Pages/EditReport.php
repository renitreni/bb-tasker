<?php

namespace App\Filament\Resources\ReportResource\Pages;

use App\Filament\Resources\ReportResource;
use Filament\Actions;
use Filament\Actions\Action;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms\Components\Actions as ComponentsActions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Blade;

class EditReport extends EditRecord
{
    protected static string $resource = ReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Accomplishments')
                ->action(function ($record) {
                    return redirect()->route('accomplishment', ['record' => $record->load('details')->toArray()]);
                }),
            Action::make('Billing')
                ->action(function ($record) {
                    return response()->streamDownload(function () use ($record) {
                        echo Pdf::loadView('billing',['record' => $record->load('details')])->stream();
                    }, 'Billing '. $record->title . '.pdf');
                }),
            Actions\DeleteAction::make(),
        ];
    }
}
