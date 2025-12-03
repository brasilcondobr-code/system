<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker as FormsDateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome completo')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('E-mail')
                    ->searchable(),
                TextColumn::make('userType.description')
                    ->label('Tipo de usuário')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('email_verified_at')
                    ->label('E-mail verificado em')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()
                    ->iconButton()
                    ->tooltip('Visualizar')
                    ->schema([
                        TextInput::make('name')->label('Nome completo'),
                        TextInput::make('email')->label('E-mail'),
                        FormsDateTimePicker::make('email_verified_at')->label('E-mail verificado em'),
                        FormsDateTimePicker::make('created_at')->label('Criado em'),
                        FormsDateTimePicker::make('updated_at')->label('Atualizado em'),
                    ]),
                EditAction::make()
                    ->iconButton()
                    ->tooltip('Editar'),
                DeleteAction::make()
                    ->iconButton()
                    ->tooltip('Excluir')
                    ->requiresConfirmation()
                    // show for every row but disable the action for the currently authenticated user
                    ->disabled(fn ($record): bool => auth()->check() ? auth()->user()->id === $record->id : false)
                    ->tooltip(fn ($record): ?string => auth()->check() && auth()->user()->id === $record->id ? 'Você não pode excluir o usuário logado' : 'Excluir'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->iconButton()
                        ->tooltip('Excluir selecionados'),
                ]),
            ]);
    }
}
