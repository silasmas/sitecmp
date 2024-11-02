<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Testimonial;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Administrateur\Resources\TestimonialResource\Pages;
use App\Filament\Administrateur\Resources\TestimonialResource\RelationManagers;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make("Formulaire des témoignages")->schema([
                        TextInput::make('fullname')
                            ->columnSpan(6)
                            ->label(label: 'Nom au complet'),
                        TextInput::make('phone')
                            ->tel()
                            ->columnSpan(6)
                            ->label(label: 'Téléphone')
                            ->maxLength(50),
                        TextInput::make('email')
                            ->email()
                            ->columnSpan(6)
                            ->label(label: 'Email')
                            ->maxLength(50),
                        FileUpload::make('image_url')
                            ->columnSpan(6)
                            ->label(label: 'Photo')
                            ->directory('ministre')
                            ->avatar()
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->circleCropper()
                            ->downloadable()
                            ->image()
                            ->maxSize(3024)
                            ->previewable(true),
                        RichEditor::make('body')
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
                        TextInput::make('is_active')
                            ->columnSpan(6)
                            ->label(label: 'Est actif')
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
                    ->label("Photo")
                    ->defaultImageUrl(url('assets/images/user/default.png')),
                TextColumn::make('fullname')
                    ->label("Nom")
                    ->searchable(),
                TextColumn::make('phone')
                    ->label("Téléphone")
                    ->searchable(),
                TextColumn::make('email')
                    ->label("mail")
                    ->searchable(),
                TextColumn::make('type')
                    ->label("Cadre")
                    ->searchable(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
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
