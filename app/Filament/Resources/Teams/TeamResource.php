<?php

namespace App\Filament\Resources\Teams;

use App\Models\Team;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

// ✅ FORM COMPONENTS
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

// ✅ TABLE COLUMNS
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    // ✅ FORM (ALL FIELDS INCLUDED)
    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            FileUpload::make('image')
                ->image()
                ->directory('team')
                ->disk('public')
                ->required()
                ->columnSpanFull(),

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

            // ✅ BIO FIELD ADDED
            Textarea::make('bio')
                ->rows(4)
                ->columnSpanFull()
                ->placeholder('Write short bio about the team member...'),

        ]);
    }

    // ✅ TABLE (SHOW ALL FIELDS)
    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image')
                    ->square(),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('position'),

                TextColumn::make('whatsapp'),

                // ✅ SHOW BIO (LIMITED)
                TextColumn::make('bio')
                    ->limit(40),

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}