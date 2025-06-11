<?php
namespace App\Filament\Administrateur\Resources;

use App\Exports\MissionnaireExport;
use App\Filament\Administrateur\Resources\MissionnaireResource\Pages;
use App\Filament\Widgets\MissionnaireStats;
use App\Models\Missionnaire;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;

class MissionnaireResource extends Resource
{
    protected static ?string $model = Missionnaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Informations Générales')
                        ->schema([
                            Grid::make(3)->schema([
                                TextInput::make('nom')->required()->columnSpan(1),
                                DatePicker::make('birthday')->nullable()
                                    ->rule('nullable|date')->required()->columnSpan(1),
                                TextInput::make('phone')->required()->columnSpan(1),
                                TextInput::make('email')->email()->required()->columnSpan(1),
                                TextInput::make('etat_civil')->required()->columnSpan(1),
                                TextInput::make('profession')->required()->columnSpan(1),
                                Textarea::make('adresse')->required()->columnSpan(3),
                            ]),
                        ]),
                    Step::make('Informations Spirituelles')
                        ->schema([
                            Grid::make(3)->schema([
                                TextInput::make('annee_conversion')->required()->columnSpan(1),
                                TextInput::make('lieu_bapteme')->required()->columnSpan(1),
                                DatePicker::make('date_bapteme')->nullable()
                                    ->rule('nullable|date')->required()->columnSpan(1),
                                TextInput::make('eglise_attache')->required()->columnSpan(1),
                                TextInput::make('temps_au_cmp')->columnSpan(1),
                                TextInput::make('departement')->columnSpan(1),
                            ]),
                        ]),
                    Step::make('Expérience Missionnaire et Formation')
                        ->schema([
                            Grid::make(2)->schema([
                                Radio::make('formation_biblique')
                                    ->boolean()
                                    ->inline()
                                    ->inlineLabel(false)
                                    ->label('Avez-vous déjà suivi une formation théologique ou biblique ?')
                                    ->options([1 => 'OUI', 0 => 'NON'])
                                    ->required()->columnSpan(1),

                                Textarea::make('description_mission')
                                    ->label('Si oui,décrivez brièvement vos expérience missionnaire (Lieux, durée, type de mission) ')
                                    ->columnSpan(1),
                                Radio::make('participer_mission')
                                    ->label('Avez-vous déjà participé à une mission ? ')
                                    ->options([1 => 'OUI', 0 => 'NON'])
                                    ->boolean()
                                    ->inline()
                                    ->inlineLabel(false)
                                    ->required()->columnSpan(1),
                                TextInput::make('niveau')
                                    ->label('Si oui, quel niveau de mission avez-vous déjà participé ?')
                                    ->columnSpan(1),
                                Select::make('lecture_bible')
                                    ->label('Quelle est votre fréquence de lecture de la Bible et la prière ?')
                                    ->options([
                                        'Quotidienne'   => 'Quotidienne',
                                        'Hebdomadaire'  => 'Hebdomadaire',
                                        'Occasionnelle' => 'Occasionnelle',
                                    ])->required()->columnSpan(1),
                                TextInput::make('livre_bible')
                                    ->label('Indiquez le livre de les livres bibliques que vous avez déjà étudiez en profondeur')
                                    ->required()
                                    ->columnSpan(1),

                            ]),
                        ]),
                    Step::make('Connaissances et Compétences')
                        ->schema([
                            Grid::make(2)->schema([
                                Select::make('base_mission')->columnSpan(1)
                                    ->label('Avez-vous des connaissances sur les fondements de la mission ?')
                                    ->options([
                                        'Oui, je peux expliquer les fondements de la mission' => 'Oui, je peux expliquer les fondements de la mission',
                                        'Non, mais j\'ai quelques notions'                    => 'Non, mais j\'ai quelques notions',
                                        'Non, je suis novice'                                 => 'Non, je suis novice',
                                    ])->required(),
                                Select::make('concepte_familier')->columnSpan(1)
                                    ->label("Etes vous familier avec les conceptes tels que le mandat missionnaire, la stratégie missionnaire, et l'inculturation ?")
                                    ->options([
                                        'Très familier'        => 'Très familier',
                                        'Moyennement familier' => 'Moyennement familier',
                                        'Pas du tout familier' => 'Pas du tout familier',
                                    ])->required(),
                                CheckboxList::make('langue_fr')->columnSpan(1)
                                    ->label('Parlez-vous le Français ?')
                                    ->options([
                                        'Francais' => 'Français',
                                    ]),
                                CheckboxList::make('langue_en')->columnSpan(1)
                                    ->label('Parlez-vous l\'Anglais ?')
                                    ->options([
                                        'Anglais' => 'Anglais',
                                    ]),
                                TextInput::make('autres')->columnSpan(1),
                                Radio::make('outils_rs')->columnSpan(1)
                                    ->label("Etes-vous à l'aise avec l'outils numériques et les réseaux sociaux")
                                    ->options([1 => 'OUI', 0 => 'NON'])
                                    ->inline()
                                    ->inlineLabel(false)
                                    ->required(),
                                Textarea::make('competence')->required()->columnSpan(2)
                                    ->label("Avez-vous des compétences en communication, pédagogie, ou leadership? (Décrivez brièvement) ?"),
                            ]),
                        ]),
                    Step::make('Motivation et Objectifs')
                        ->schema([
                            Textarea::make('but_formation')->required()
                                ->label('Pourquoi souhaitez-vous suivre cette formation missionnaire ?'),
                            Textarea::make('objectif')->required()
                                ->label("Quelles sont vos objectifs dans le cadre de cette formation? (Ex : Approfondir ma foi, devenir missionnaire, former d'autres personnes, etc)"),
                            Radio::make('disponible')
                                ->label('Etes-vous disponible pour des missions de terrain dans les 12 prochains mois?')
                                ->options([1 => 'OUI', 0 => 'NON'])
                                ->inline()
                                ->inlineLabel(false)
                                ->required(),
                        ]),
                ])->persistStepInQueryString('wizard-step')
                    ->skippable(true)   // Permet de sauter des étapes
                    ->columnSpanFull(), // Prend toute la largeur disponible
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table->striped()->deferLoading()->heading('Les Missionnaires')
            ->description('Cette table contient plus des colonnes que celle qui est visible')
            ->emptyState(
                view('components.loading-message')->with('message', 'Chargement des missionnaires, veuillez patienter...')
            )
        // ->groups([
        //     Group::make('eglise_attache')
        //         ->label('Église Attachée'),
        // ])
            ->filters([
                SelectFilter::make('eglise_attache')
                    ->label('Église Attachée')
                    ->options(
                        fn() => \App\Models\Missionnaire::query()
                            ->whereNotNull('eglise_attache') // Évite les valeurs NULL
                            ->distinct()
                            ->pluck('eglise_attache', 'eglise_attache')
                            ->toArray()
                    )
                    ->searchable()
                    ->preload()
                    ->indicator("Église d'attache"),
            ])

            ->columns([
                TextColumn::make('nom')
                    ->searchable(),
                // TextColumn::make('birthday')
                //     ->date()
                //     ->sortable(),
                TextColumn::make('birthday')
                    ->label('Âge')
                    ->getStateUsing(fn($record) => strtotime($record->birthday) ? now()->diffInYears(
                        \Illuminate\Support\Carbon::parse($record->birthday)
                    ) . " Ans" : 'N/A')
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('etat_civil')
                    ->label('Etat civil')
                    ->searchable(),
                TextColumn::make('profession')
                    ->label('Profession')
                    ->searchable(),
                // Colonnes masquées par défaut
                TextColumn::make('annee_conversion')
                    ->searchable()
                    ->label("Converti depuis"),
                IconColumn::make('langue_fr')
                    ->label('Français')
                    ->boolean()
                    ->getStateUsing(fn($record) => ! empty($record->langue_en))
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                IconColumn::make('langue_en')
                    ->label('Anglais')
                    ->boolean()
                    ->getStateUsing(fn($record) => ! empty($record->langue_en))
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                TextColumn::make('date_bapteme')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('eglise_attache')
                    ->searchable(),
                TextColumn::make('temps_au_cmp')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('departement')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('participer_mission')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('formation_biblique')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('lecture_bible')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('livre_bible')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('base_mission')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('concepte_familier')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('autres')
                    ->label("Autres langues")
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('outils_rs')
                    ->label("Maitrise des réseau sociaux")
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                IconColumn::make('disponible')
                    ->label("Disponible")
                    ->searchable(),
                SelectColumn::make('validationFormulaire')
                    ->label("Validation")
                    ->options([
                        '0' => 'En attente',
                        '1' => 'Validé',
                        '2' => 'Rejeté',
                    ]),
                // TextColumn::make('validationFormulaire')
                //     ->searchable()
                //     ->label("Validation")
                //     ->description("cette colonne montre si ces informations sont valide ou pasn"),
                // TextColumn::make('note_validation')
                //     ->searchable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label("Date d'inscription")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->label("Date de modification")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                BulkAction::make('export')
                    ->label('Exporter en Excel')
                    ->action(fn($records) => Excel::download(new MissionnaireExport($records), 'export.xlsx')),
                // BulkAction::make('export_pdf')
                //     ->label('Exporter en PDF')
                //     ->action(fn($records) => (new MissionnairePdfExport($records))->download()),

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
            'index'  => Pages\ListMissionnaires::route('/'),
            'create' => Pages\CreateMissionnaire::route('/create'),
            'edit'   => Pages\EditMissionnaire::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string | array | null
    {
        return static::getModel()::count() < 1 ? "danger" : "success";
    }
    public static function getWidgets(): array
    {
        return [
            MissionnaireStats::class, // Ajout du widget de statistiques
        ];
    }
}
