<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
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
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\PostResource\Pages;
use App\Filament\Administrateur\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire Post")->schema([
                        TextInput::make('title.fr')
                            ->label('Thème')
                            ->required()
                            ->columnSpan(4),
                        Select::make('type')
                            ->label('Type de poste')
                            ->columnSpan(4)
                            ->required()
                            ->options([
                                '1' => 'Video',
                                '2' => 'Audio',
                                '3' => 'Article',
                            ]),
                        TextInput::make('author')
                            ->label('Auteur')
                            ->columnSpan(4),
                        DateTimePicker::make('date_publication')
                            ->label('Date de publication')
                            ->seconds(false)
                            ->native(false)
                            ->closeOnDateSelection()
                            ->prefixIcon('heroicon-m-check-circle')
                            ->prefixIconColor('success')
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('link_url')
                            ->label('Lien de la vidéo')
                            ->columnSpan(6),
                        Select::make('event_id')
                            ->label(label: 'Evenement')
                            ->searchable()
                            ->columnSpan(6)
                            ->preload()
                            ->required()
                            ->relationship('event', 'designation'),
                        Select::make('minister_id')
                            ->label(label: 'Aurateur')
                            ->searchable()
                            ->columnSpan(6)
                            ->preload()
                            ->required()
                            ->relationship('minister', 'fullname'),
                        FileUpload::make('image_url.fr')
                            ->columnSpan(12)
                            ->label(label: 'Image de couverture')
                            ->directory('posts')
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->previewable(true),
                        RichEditor::make('body.fr')
                            ->label(label: 'Contenu du message')
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
                        TextInput::make('observation')
                            ->label(label: 'Observation')
                            ->columnSpan(6),
                        TextInput::make('references')
                            ->label(label: 'Référence')
                            ->columnSpan(6),
                        Toggle::make('is_active')
                            ->label('Active (pour le rendre visible ou pas)')
                            ->columnSpan(6)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ])->columnS(12)
                ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_url')
                    ->label("Image"),
                TextColumn::make('title')
                    ->label("Thème")
                    ->sortable(),
                TextColumn::make('type')
                    ->label("Type")
                    ->sortable()
                    ->badge()->color('success')
                    ->formatStateUsing(function ($state) {
                        // Remplacez 1, 2, 3 par les valeurs que vous attendez
                        return match ($state) {
                            1 => 'Vidéo',
                            2 => 'Audio',
                            3 => 'Article',
                        };
                    }),
                TextColumn::make('minister.fullname')
                    ->label("Prédicateur")
                    ->sortable(),
                TextColumn::make('author')
                    ->label("Auteur")
                    ->searchable(),
                TextColumn::make('event.designation')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('date_publication')
                    ->label("Date de publication")
                    ->dateTime()
                    ->sortable(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
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
