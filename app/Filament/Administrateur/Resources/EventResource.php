<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\EventResource\Pages;
use App\Filament\Administrateur\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire Event")->schema([
                        TextInput::make('theme.fr')
                            ->label('Thème')
                            ->columnSpan(4),
                        TextInput::make('designation.fr')
                            ->required()
                            ->label('Designation')
                            ->columnSpan(4),
                        Select::make('type')
                            ->columnSpan(4)
                            ->options([
                                '1' => 'Culte',
                                '2' => 'Seminaire',
                                '3' => 'Concert',
                                '4' => 'Série d\'enseignement',
                            ]),

                        // TextInput::make('lieu.fr')
                        //     ->label('Lieu')
                        //     ->columnSpan(4),
                        DateTimePicker::make('date_debut')
                            ->label('Dete debut')
                            ->seconds(false)
                            ->native(false)
                            ->closeOnDateSelection()
                            ->prefixIcon('heroicon-m-calendar')
                            ->prefixIconColor('success')
                            ->columnSpan(6),
                        DateTimePicker::make('date_fin')
                            ->label('Dete fin')
                            ->seconds(false)
                            ->native(false)
                            ->closeOnDateSelection()
                            ->prefixIcon('heroicon-m-calendar')
                            ->prefixIconColor('success')
                            ->columnSpan(6),
                        // TextInput::make('orateur')
                        //     ->label('Orateur')
                        //     ->maxLength(50)
                        //     ->columnSpan(4),
                        FileUpload::make('image_url.fr')
                            ->columnSpan(12)
                            ->label('Vignette')
                            ->directory('eventImg')
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->previewable(true),
                        RichEditor::make('description.fr')
                            ->label('Description (Français)')
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
                        Toggle::make('is_active')
                            ->label('Active (pour le rendre visible ou pas)')
                            ->columnSpan(4)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                        Toggle::make('est_a_la_une')
                            ->label('Est à la une')
                            ->columnSpan(4)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                        // Toggle::make('payant')
                        //     ->label('Payant')
                        //     ->columnSpan(4)
                        //     ->onColor('success')
                        //     ->offColor('danger'),
                    ])->columnS(12),
                    Section::make("Si c'est payant")->schema([
                        TagsInput::make('prix')
                        ->label('le prix')
                        ->placeholder('Prix')
                        ->columnSpan(3)
                        ->separator(','),
                        TagsInput::make('monnaie')
                            ->label('Monnaie')
                            ->placeholder('Selectionnez la monnaie')
                            ->separator(',')
                            ->columnSpan(3)
                        ->suggestions([
                            'FR',
                            'UDS',
                        ]),
                        TagsInput::make('categorie')
                            ->label('Categorie')
                            ->placeholder('Selectionnez la categorie')
                            ->separator(',')
                            ->columnSpan(3)
                            ->suggestions([
                                'Concert',
                                'Seminaire',
                                'Culte',
                            ]),
                            TextInput::make('quota')
                            ->label('Nombre de places')
                            ->numeric()
                            ->placeholder('Nombre de places')
                            ->minValue(1)
                            ->columnSpan(3),
                    ])->columnS(12)
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_url')
                    ->label("Image"),
                TextColumn::make('theme')
                    ->label("Theme")
                    ->sortable(),
                TextColumn::make('designation')
                    ->label("Designation")
                    ->sortable(),
                TextColumn::make('type')
                    ->label("Type")
                    ->numeric()
                    ->sortable()
                    ->badge()->color('success')
                    ->formatStateUsing(function ($state) {
                        // Remplacez 1, 2, 3 par les valeurs que vous attendez
                        return match ($state) {
                            1 => 'Culte',
                            2 => 'Seminaire',
                            3 => 'Concert',
                            4 => 'Série d\'enseignement',
                        };
                    }),
                // TextColumn::make('orateur')
                //     ->label("Orateur")
                //     ->searchable(),
                TextColumn::make('date_debut')
                    ->label("Date debut")
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('date_fin')
                    ->label("Date fin")
                    ->dateTime()
                    ->sortable(),
                IconColumn::make('est_a_la_une')
                    ->label("Est à la une")
                    ->boolean(),
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
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
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
