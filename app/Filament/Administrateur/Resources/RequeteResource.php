<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Requete;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\RequeteResource\Pages;
use App\Filament\Administrateur\Resources\RequeteResource\RelationManagers;

class RequeteResource extends Resource
{
    protected static ?string $model = Requete::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('fullname')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pays')
                    ->maxLength(50),
                Forms\Components\Textarea::make('requete')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fullname')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pays')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->headerActions([
                Action::make('Export Excel')
                    ->label('Exporter en Excel')
                    // ->url(route('users.export.excel')) // Route vers l'export Excel
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(function ($livewire) {
                        // Récupère les filtres appliqués
                        $filters = $livewire->tableFilters;

                        // Stocke les filtres dans la session
                        session(['filters' => $filters]);

                        // Redirige vers la route d'export Excel
                        return redirect()->route('users.export.excel');
                    }),

                Action::make('Export PDF')
                    ->label('Exporter en PDF')
                    ->url(route('users.export.pdf')) // Route vers l'export PDF
                    ->icon('heroicon-o-document-text')
                    ->action(function ($livewire) {
                        // Récupère les filtres appliqués
                        $filters = $livewire->tableFilters;

                        // Stocke les filtres dans la session
                        session(['filters' => $filters]);

                        // Redirige vers la route d'export Excel
                        return redirect()->route('users.export.pdf');
                    }),

            ])
            ->filters([
                // Ajouter vos filtres ici
                Tables\Filters\Filter::make('created_at')
                    ->label('Date de création')
                    ->form([
                        Forms\Components\DatePicker::make('created_from')->label('À partir de'),
                        Forms\Components\DatePicker::make('created_to')->label('Jusqu\'à'),
                    ])
                    ->query(function ($query, $data) {
                        return $query
                            ->when($data['created_from'], fn($query) => $query->whereDate('created_at', '>=', $data['created_from']))
                            ->when($data['created_to'], fn($query) => $query->whereDate('created_at', '<=', $data['created_to']));
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Action::make('Export Excel')
                //     ->url(route('users.export.excel')) // Définissez vos routes
                //     ->icon('heroicon-o-arrow-down-tray'),

                // Action::make('Export PDF')
                //     ->url(route('users.export.pdf'))
                //     ->icon('heroicon-o-document-text'),
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
            'index' => Pages\ListRequetes::route('/'),
            // 'create' => Pages\CreateRequete::route('/create'),
            // 'edit' => Pages\EditRequete::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "success";
    }
}
