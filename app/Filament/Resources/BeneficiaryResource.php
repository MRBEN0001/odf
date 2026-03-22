<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeneficiaryResource\Pages;
use App\Models\Beneficiary;
use BackedEnum;
use UnitEnum;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class BeneficiaryResource extends Resource
{
    protected static ?string $model = Beneficiary::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Beneficiaries';

    protected static ?string $recordTitleAttribute = 'donation_tag';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
                Forms\Components\FileUpload::make('image_path')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('beneficiaries')
                    ->visibility('public')
                    ->required()
                    ->imageEditor()
                    ->imageCropAspectRatio('4:3')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('900'),

                Forms\Components\Select::make('donation_tag')
                    ->label('Donation tag')
                    ->options([
                        'Food' => 'Food',
                        'Education' => 'Education',
                        'Health' => 'Health',
                        'Shelter' => 'Shelter',
                        'Emergency' => 'Emergency',
                        'Other' => 'Other',
                    ])
                    ->searchable()
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->rows(4)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_path')
                    ->disk('public')
                    ->label('Image')
                    ->defaultImageUrl(asset('assets/images/cause/one.png'))
                    ->size(40),

                TextColumn::make('donation_tag')
                    ->badge()
                    ->sortable()
                    ->searchable(),

                TextColumn::make('description')
                    ->limit(60)
                    ->wrap(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeneficiaries::route('/'),
            'create' => Pages\CreateBeneficiary::route('/create'),
            'edit' => Pages\EditBeneficiary::route('/{record}/edit'),
        ];
    }
}

