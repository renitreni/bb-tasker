<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailsResource\RelationManagers\DetailRelationManager;
use App\Filament\Resources\ReportResource\Pages;
use App\Filament\Resources\ReportResource\RelationManagers;
use App\Models\Report;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationGroup;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportResource extends Resource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->columns(3)
                    ->schema([
                        TextInput::make('title')->columnSpan(2)->required(),
                        TextInput::make('invoice_number')->columnSpan(1)->required(),
                        DatePicker::make('invoice_date')->columnSpan(1)->required(),
                        DatePicker::make('due_date')->columnSpan(1)->required(),
                        TextInput::make('account_name')->columnSpan(1)->required(),
                        TextInput::make('account_number')->columnSpan(1)->required(),
                        TextInput::make('bank_name')->columnSpan(1)->required(),
                        TextInput::make('bank_address')->columnSpan(1)->required(),
                        TextInput::make('report_name')->columnSpan(1)->required(),
                        TextInput::make('project_name')->columnSpan(1)->required(),
                        TextInput::make('project_handled')->columnSpan(1)->required(),
                    ]),
                Grid::make()
                    ->columns(3)
                    ->schema([
                        RichEditor::make('bill_from'),
                        RichEditor::make('bill_to'),
                        RichEditor::make('terms_condition'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('invoice_date', 'desc')
            ->columns([
                TextColumn::make('invoice_date')->sortable(),
                TextColumn::make('title'),
                TextColumn::make('due_date'),
                TextColumn::make('details_sum_hours_spent')->sum('details', 'hours_spent'),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReport::route('/create'),
            'edit' => Pages\EditReport::route('/{record}/edit'),
        ];
    }
}
