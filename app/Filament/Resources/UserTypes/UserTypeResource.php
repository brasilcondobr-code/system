<?php

namespace App\Filament\Resources\UserTypes;

use App\Filament\Resources\UserTypes\Pages\CreateUserType;
use App\Filament\Resources\UserTypes\Pages\EditUserType;
use App\Filament\Resources\UserTypes\Pages\ListUserTypes;
use App\Filament\Resources\UserTypes\Schemas\UserTypeForm;
use App\Filament\Resources\UserTypes\Tables\UserTypesTable;
use App\Models\UserType;
use Filament\Resources\Resource;
use BackedEnum;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;

class UserTypeResource extends Resource
{
    protected static ?string $model = UserType::class;

    protected static ?string $navigationLabel = 'Tipo de Usuários';

    protected static BackedEnum|string|null $navigationIcon = Heroicon::OutlinedTag;

    public static function getPluralModelLabel(): string
    {
        return 'Tipo de Usuários';
    }

    public static function form(Schema $schema): Schema
    {
        return UserTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserTypesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUserTypes::route('/'),
            'create' => CreateUserType::route('/create'),
            'edit' => EditUserType::route('/{record}/edit'),
        ];
    }
}
