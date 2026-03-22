<?php

namespace App\Filament\Resources\Teams;

use App\Filament\Resources\Teams\Pages\CreateTeam;
use App\Filament\Resources\Teams\Pages\EditTeam;
use App\Filament\Resources\Teams\Pages\ListTeams;
use App\Filament\Resources\Teams\Pages\ViewTeam;
use App\Models\Team;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

// ✅ Form Components (use full namespace OR import properly)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

// ✅ Table Columns
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    /**
     * ✅ FILAMENT V3 FORM (FIXED)
     */
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->directory('team')
                    ->disk('public')
                    ->required(),

                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('position')
                    ->required()
                    ->maxLength(255),

                TextInput::make('whatsapp')
                    ->label('WhatsApp Number')
                    ->helperText('Example: 2348012345678 (no +)')
                    ->required(),
            ]);
    }

    /**
     * ✅ TABLE (FIXED)
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->disk('public'),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('position'),

                TextColumn::make('whatsapp'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    /**
     * ✅ PAGES
     */
    public static function getPages(): array
    {
        return [
            'index' => ListTeams::route('/'),
            'create' => CreateTeam::route('/create'),
            'view' => ViewTeam::route('/{record}'),
            'edit' => EditTeam::route('/{record}/edit'),
        ];
    }
}