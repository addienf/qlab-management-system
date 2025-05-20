<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpesifikasiProductResource\Pages;
use App\Filament\Resources\SpesifikasiProductResource\RelationManagers;
use App\Models\Sales\SpesifikasiProduct;
use Filament\Forms;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpesifikasiProductResource extends Resource
{
    protected static ?string $model = SpesifikasiProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sales';
    protected static ?string $navigationLabel = 'Spesifikasi Product';
    protected static ?string $pluralLabel = 'Spesifikasi Product';
    protected static ?string $modelLabel = 'Spesifikasi Product';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Wizard::make([
                    Step::make('Personal Info')
                        ->schema([
                            TextInput::make('no_urs')
                                ->label('No URS')
                                ->required(),
                            TextInput::make('name')
                                ->label('Customer Name')
                                ->required(),
                            TextInput::make('department')
                                ->label('Department')
                                ->required(),
                            TextInput::make('phone_number')
                                ->label('Phone Number')
                                ->required(),
                            TextInput::make('company_name')
                                ->label('Company Name')
                                ->required(),
                            TextInput::make('company_address')
                                ->label('Company Address')
                                ->required(),
                        ]),
                    Step::make('Product Selection')
                        ->schema([
                            Section::make('Pilih Product')
                                ->schema([
                                    Repeater::make('productRequestItem')
                                        ->label('Pilih Product')
                                        ->relationship()
                                        ->schema([
                                            Select::make('product_id')
                                                ->label('Product')
                                                ->relationship('product', 'product_name')
                                                ->required(),
                                            TextInput::make('quantity')
                                                ->numeric()
                                                ->default(1),
                                            Section::make('Spesification')
                                                ->collapsible()
                                                ->schema([
                                                    Repeater::make('specification')
                                                        ->schema([
                                                            Select::make('name')
                                                                ->label('Jenis Spesifiaksi')
                                                                ->options(config('spec_config.spesifikasi'))
                                                                ->reactive(),
                                                            Radio::make('value')
                                                                ->label('Nilai')
                                                                ->boolean()
                                                                ->inline()
                                                                ->inlineLabel(false)
                                                                ->visible(fn($get) => in_array($get('name'), ['water_feeding_system', 'software'])),
                                                            TextInput::make('value')
                                                                ->label('Nilai')
                                                                ->visible(fn($get) => !in_array($get('name'), ['water_feeding_system', 'software'])),
                                                        ])->columns(2)
                                                        ->defaultItems(1)
                                                        ->addActionLabel('Add Specification')
                                                        ->columnSpanFull(),
                                                ])
                                        ])
                                ]),
                        ]),
                    Step::make('Detail')
                        ->schema([
                            TextInput::make('detail_spesification')
                                ->label('Detail Spesification')
                                ->required(),
                            TextInput::make('delivery_address')
                                ->label('Delivery Address')
                                ->required(),
                            TextInput::make('pic')
                                ->label('PIC')
                                ->required(),
                            Radio::make('is_stock')
                                ->label('Is Stock')
                                ->required()
                                ->boolean()
                                ->inline()
                                ->inlineLabel(false)
                        ])
                ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('no_urs'),
                TextColumn::make('name'),
                TextColumn::make('pic'),
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
            'index' => Pages\ListSpesifikasiProducts::route('/'),
            'create' => Pages\CreateSpesifikasiProduct::route('/create'),
            'view' => Pages\ViewSpesifikasiProduct::route('/{record}'),
            'edit' => Pages\EditSpesifikasiProduct::route('/{record}/edit'),
        ];
    }
}
