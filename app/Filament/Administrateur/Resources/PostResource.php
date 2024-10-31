<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\PostResource\Pages;
use App\Filament\Administrateur\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('title')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('type')
                    ->numeric(),
                TextInput::make('link_url')
                    ->maxLength(191),
                Textarea::make('image_url')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Textarea::make('body')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->maxLength(191),
                Textarea::make('observation')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('event_id')
                    ->numeric(),
                TextInput::make('is_active')
                    ->numeric()
                    ->default(1),
                Textarea::make('references')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                DateTimePicker::make('date_publication'),
                Textarea::make('fichier_url')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('minister_id')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('link_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('is_active')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('date_publication')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('minister_id')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
}
