<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\actualites;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\LinkColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\ActualitesResource\Pages;
use App\Filament\Administrateur\Resources\ActualitesResource\RelationManagers;

class ActualitesResource extends Resource
{
    protected static ?string $model = actualites::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire d'actualité")->schema([
                        TextInput::make('titre')
                            ->label('Titre')
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('soutTitre')
                            ->label('Sous titre')
                            ->columnSpan(6),
                        FileUpload::make('img_url')
                            ->columnSpan(6)
                            ->image()
                            ->label('Vignette')
                            ->directory('actualites')
                            ->downloadable()
                            ->maxSize(3024)
                            ->previewable(true),
                        FileUpload::make('pdf')
                            ->columnSpan(6)
                            ->acceptedFileTypes(['application/pdf'])
                            ->label('Fichier')
                            ->directory('actualites')
                            ->downloadable()
                            ->maxSize(3024)
                            ->previewable(true),
                        RichEditor::make('description')
                            ->label('Description')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull(),
                        DateTimePicker::make('publish_at')
                            ->label('Date de publication')
                            ->columnSpan(6)
                            ->required()
                            ->minDate(now()) // Empêche la sélection des dates passées

                            ->native(false), // Désactive le sélecteur natif pour une meilleure UX

                        DateTimePicker::make('expire_at')
                            ->label('Date d’expiration')
                            ->columnSpan(6)
                            ->nullable()
                            ->minDate(now()) // Empêche la sélection des dates passées
                            ->native(false), // Facultatif
                        Toggle::make('is_active')
                            ->label('Active (pour le rendre visible ou pas)')
                            ->columnSpan(6)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ])->columnS(12)
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('img_url')
                    ->label("Image"),
                TextColumn::make('titre')
                    ->label('Titre')
                    ->sortable(),
                TextColumn::make('soutTitre')
                    ->label('Sous Titre')
                    ->sortable(),

                TextColumn::make('pdf')
                    ->label('PDF')
                    ->formatStateUsing(fn($record) => '<a href="' . asset('storage/' . $record->pdf) . '" target="_blank" class="text-blue-500 underline">📄 Voir PDF</a>')
                    ->html(), // Active l'affichage du HTML
                TextColumn::make('publish_at')
                    ->label('Date de publication')
                    ->dateTime('d/m/Y H:i') // Formatage de la date
                    ->sortable(),

                TextColumn::make('expire_at')
                    ->label('Date d’expiration')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->default('-'),
                IconColumn::make('is_active')
                    ->label("Est actif")
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListActualites::route('/'),
            'create' => Pages\CreateActualites::route('/create'),
            'edit' => Pages\EditActualites::route('/{record}/edit'),
        ];
    }
}
