<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Minister;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\MinisterResource\Pages;
use App\Filament\Administrateur\Resources\MinisterResource\RelationManagers;

class MinisterResource extends Resource
{
    protected static ?string $model = Minister::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Pasteurs';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire Ministre")->schema([
                        TextInput::make('fullname')
                            ->required()
                            ->columnSpan(6),
                        TextInput::make('contact')
                            ->columnSpan(6)
                            ->maxLength(191),
                        TextInput::make('type')
                            ->columnSpan(6)
                            ->maxLength(191),
                        TextInput::make('facebook_url')
                            ->columnSpan(6)
                            ->maxLength(191),
                        TextInput::make('instagram_url')
                            ->columnSpan(6)
                            ->maxLength(191),
                        TextInput::make('twitter_url')
                            ->columnSpan(6)
                            ->maxLength(191),
                        TextInput::make('youtube_url')
                            ->columnSpan(6)
                            ->maxLength(191),
                        FileUpload::make('image_url')
                            ->columnSpan(6)
                            ->label(label: 'Photo de profil')
                            ->directory('ministre')
                            ->avatar()
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->circleCropper()
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->previewable(true),
                        RichEditor::make('bio')
                            ->label(label: 'Biographie')
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
                        Toggle::make(name: 'is_titular')
                            ->label('Est titulaire')
                            ->columnSpan(6)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
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
                    ->circular()
                    ->defaultImageUrl(url('assets/images/user/default.png')),
                TextColumn::make('fullname')
                    ->searchable(),
                TextColumn::make('contact')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('facebook_url')
                //     ->searchable(),
                // TextColumn::make('instagram_url')
                //     ->searchable(),
                // TextColumn::make('twitter_url')
                //     ->searchable(),
                // TextColumn::make('youtube_url')
                //     ->searchable(),
                IconColumn::make('is_titular')
                    ->label("Est titulaire")
                    ->boolean(),
                IconColumn::make('is_active')
                    ->label("Est actif")
                    ->boolean(),
            ])
            ->filters([
                // SelectFilter::make('type')
                //     ->label('Type')
                //     ->options(
                //         fn() => \App\Models\Minister::query()
                //             ->whereNotNull('type') // Évite les valeurs NULL
                //             ->distinct()
                //             ->pluck('type', 'type')
                //             ->toArray()
                //     )
                //     ->searchable()
                //     ->preload()
                //     ->indicator("Type")
                //     ->query(function ($query, $value) {
                //         return $query->where('type', $value);
                //     }),
                    // ->query(fn ($query, $value) => dd($query->where('type', $value)->toSql(), $query->getBindings())), // ✅ Applique le filtre manuellement
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
            'index' => Pages\ListMinisters::route('/'),
            'create' => Pages\CreateMinister::route('/create'),
            'edit' => Pages\EditMinister::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 1 ? "danger" : "info";
    }
}
