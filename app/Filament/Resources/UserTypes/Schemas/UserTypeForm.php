<?php

namespace App\Filament\Resources\UserTypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('description')
                    ->label('Descrição')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
