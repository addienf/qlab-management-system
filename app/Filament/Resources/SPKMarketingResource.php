<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SPKMarketingResource\Pages;
use App\Filament\Resources\SPKMarketingResource\RelationManagers;
use App\Models\Sales\SPKMarketing;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SPKMarketingResource extends Resource
{
    protected static ?string $model = SPKMarketing::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
                        ->slideOver(),
                    Tables\Actions\DeleteAction::make(),
                ])
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
            'index' => Pages\ListSPKMarketings::route('/'),
            'create' => Pages\CreateSPKMarketing::route('/create'),
            'view' => Pages\ViewSPKMarketing::route('/{record}'),
            'edit' => Pages\EditSPKMarketing::route('/{record}/edit'),
        ];
    }
}
