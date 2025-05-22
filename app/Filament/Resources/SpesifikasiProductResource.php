<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpesifikasiProductResource\Pages;
use App\Filament\Resources\SpesifikasiProductResource\RelationManagers;
use App\Models\Sales\SpesifikasiProduct;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Saade\FilamentAutograph\Forms\Components\SignaturePad;
use Filament\Tables\Actions\Action;

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
                Section::make('Contact Information')
                    ->extraAttributes(['class' => 'border-2 border-blue-300 rounded-md dark:border-blue-50'])
                    ->collapsible()
                    ->schema([
                        TextInput::make('no_urs')->label('No URS')->required()->columnSpan(1),
                        TextInput::make('name')->label('Customer Name')->required()->columnSpan(1),
                        TextInput::make('department')->label('Department')->required()->columnSpan(1),
                        TextInput::make('phone_number')->label('Phone Number')->numeric()->required()->columnSpan(1),
                        TextInput::make('company_name')->label('Company Name')->required()->columnSpan(2),
                        TextInput::make('company_address')->label('Company Address')->required()->columnSpanFull(),
                    ])->columns(3),

                Section::make('Product Request')
                    ->extraAttributes(['class' => 'border-2 border-blue-300 rounded-md dark:border-blue-50'])
                    ->collapsible()
                    ->schema([
                        Repeater::make('productRequestItem')
                            ->label('Pilih Product')
                            ->relationship()
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Select::make('product_id')
                                            ->label('Product')
                                            ->required()
                                            ->relationship('product', 'product_name')
                                            ->columnSpan(1),

                                        TextInput::make('quantity')
                                            ->numeric()
                                            ->default(1)
                                            ->required()
                                            ->columnSpan(1),
                                    ]),

                                Repeater::make('specification')
                                    ->label('Pilih Spesifikasi')
                                    ->schema([
                                        Select::make('name')
                                            ->reactive()
                                            ->required()
                                            ->label('Jenis Spesifiaksi')
                                            ->options(config('spec_config.spesifikasi'))
                                            ->columnSpan(1),

                                        Radio::make('value')
                                            ->label('Nilai')
                                            ->boolean()
                                            ->inline()
                                            ->required()
                                            ->inlineLabel(false)
                                            ->visible(fn($get) => in_array($get('name'), ['water_feeding_system', 'software']))
                                            ->columnSpan(1),

                                        TextInput::make('value')
                                            ->label('Nilai')
                                            ->required()
                                            ->visible(fn($get) => !in_array($get('name'), ['water_feeding_system', 'software']))
                                            ->columnSpan(1),
                                    ])
                                    ->columns(2)
                                    ->defaultItems(1)
                                    ->columnSpanFull()
                                    ->addActionLabel('Add Specification'),
                            ])
                            ->columns(1)
                            ->addActionLabel('Add Product'),
                    ]),


                Section::make('Delivery & PIC Information')
                    ->extraAttributes(['class' => 'border-2 border-blue-300 rounded-md dark:border-blue-50'])
                    ->collapsible()
                    ->schema([
                        RichEditor::make('detail_spesification')->label('Detail Spesification')->required()->columnSpanFull(),
                        TextInput::make('delivery_address')->label('Delivery Address')->required()->columnSpanFull(),
                        TextInput::make('pic_name')->label('PIC Name')->required()->columnSpan(1),
                        DatePicker::make('date')->label('Tanggal')->required()->columnSpan(1),
                        static::getSignature()->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('no_urs')
                    ->label('No URS')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),

                ImageColumn::make('pic_sign')
                    ->label('Tanda Tangan')
                    ->height(80)
                    ->width(150)
                    ->getStateUsing(fn($record) => asset('storage/' . $record->pic_sign)),
            ])
            ->filters([
                // Tambahkan filter di sini jika perlu
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make()->color('primary'),
                    Tables\Actions\EditAction::make()->slideOver()->color('warning'),
                    Tables\Actions\DeleteAction::make(),
                    Action::make('Lihat PDF')
                        ->openUrlInNewTab(),

                ]),
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
            'pdf' => Pages\pdfViewSpesifikasiProduk::route('/pdf'),
        ];
    }
    public static function getSignature(): SignaturePad
    {
        return SignaturePad::make('pic_sign')
            ->label('Tanda Tangan')
            ->afterStateUpdated(function ($state, callable $set, $get, $livewire) {
                if (!$state)
                    return;
                // $oldPath = $get('pic_sign');
                $oldPath = $livewire->record?->pic_sign ?? null;
                $record = $livewire->record ?? new SpesifikasiProduct();
                $newPath = $record->handleSignature($state, $oldPath);
                $set('pic_sign', $newPath);
            });
    }
}