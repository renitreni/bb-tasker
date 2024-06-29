<?php

namespace App\Filament\Resources\DetailsResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailRelationManager extends RelationManager
{
    protected static string $relationship = 'details';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('task_name')->required(),
                Forms\Components\TextInput::make('task_link')->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Completed' => 'Completed',
                        'Ongoing' => 'Ongoing',
                        'Pending' => 'Pending'
                    ])->required(),
                Forms\Components\DatePicker::make('record_date')->required(),
                Forms\Components\TextInput::make('hours_spent')->numeric()->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Detail')
            ->columns([
                Tables\Columns\TextColumn::make('task_name'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('record_date'),
                Tables\Columns\TextColumn::make('hours_spent'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
}
