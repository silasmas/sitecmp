<?php

namespace App\Filament\Administrateur\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Missionnaire;
use Filament\Resources\Resource;
use App\Exports\MissionnaireExport;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use App\Exports\MissionnairePdfExport;
use Filament\Support\Enums\FontWeight;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\CheckboxList;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Filament\Administrateur\Resources\MissionnaireResource\Pages;
use App\Filament\Administrateur\Resources\MissionnaireResource\RelationManagers;

class MissionnaireResource extends Resource
{
    protected static ?string $model = Missionnaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    // public static function form(Form $form): Form
    // {
    //     return $form
    //     ->schema([
    //         Wizard::make([
    //             Step::make('Demandeur')
    //                 ->description('Informations générale et sirituelles')
    //                 ->schema([
    //                     Grid::make(4) // Deux colonnes
    //                         ->schema([
    //                             TextInput::make('prenom')
    //                                 ->label('Prénom')
    //                                 ->required()
    //                                 ->live()
    //                                 ->columnSpan(1),
    //                             TextInput::make('nom')
    //                                 ->label('nom')
    //                                 ->required()
    //                                 ->columnSpan(1),
    //                             Select::make('departement_id')
    //                                 ->label(label: 'Département')
    //                                 ->relationship('departement', 'nom')
    //                                 ->searchable()
    //                                 ->preload()
    //                                 ->columnSpan(1)
    //                                 ->required(),

    //                         ]),
    //                     Grid::make(2) // Deux colonnes
    //                         ->schema([
    //                             TextInput::make('fonction')
    //                                 ->label('Fonction au département')
    //                                 ->required()
    //                                 ->columnSpan(1),
    //                             TextInput::make('phone')
    //                                 ->label('Télephone')
    //                                 ->required()
    //                                 ->columnSpan(1),
    //                             TextInput::make('whatsapp')
    //                                 ->label('Numéro WhatsApp')
    //                                 ->required()
    //                                 ->columnSpan(1),
    //                             TextInput::make('email')
    //                                 ->label('E-mail (Pour reception du produit fini)')
    //                                 ->email()
    //                                 ->columnSpan(1)
    //                                 ->required(),
    //                         ]),
    //                 ]),

    //             Step::make('Evenement')
    //                 ->schema([
    //                     Grid::make(2) // Deux colonnes
    //                         ->schema([
    //                             TextInput::make('type')
    //                                 ->label('Type de la demande')
    //                                 ->required()
    //                                 ->columnSpan(1),
    //                             TextInput::make('theme')
    //                                 ->label('Thème :')
    //                                 ->columnSpan(1),
    //                             DateTimePicker::make('dateDebut')
    //                                 ->label('Date et heure de début')
    //                                 ->columnSpan(1),
    //                             DateTimePicker::make('dateFin')
    //                                 ->label('Date et heure de fin')
    //                                 ->columnSpan(1),
    //                             TagsInput::make('orateurs')
    //                                 ->label('Les orateurs')
    //                                 ->placeholder('vous pouvez ajouté pluslieurs nom...')
    //                                 ->required()
    //                                 ->separator(',')
    //                                 ->suggestions(InfoTag::pluck('nom')->toArray())
    //                                 ->saveRelationshipsWhenHidden() // Sauvegarde même si le champ est caché
    //                                 ->columnSpan(1),
    //                             TagsInput::make('invites')
    //                                 ->label('Les invités')
    //                                 ->placeholder('vous pouvez ajouté pluslieurs nom...')
    //                                 ->required()
    //                                 ->separator(',')
    //                                 ->suggestions(InfoTag::pluck('nom')->toArray())
    //                                 ->saveRelationshipsWhenHidden() // Sauvegarde même si le champ est caché
    //                                 ->columnSpan(1),
    //                             TextInput::make('lieu')
    //                                 ->label('Lieu')
    //                                 ->columnSpan(2),
    //                             RichEditor::make('autresInfos')
    //                                 ->label(label: 'Autres parametres lié de la demande')
    //                                 ->toolbarButtons([
    //                                     'attachFiles',
    //                                     'blockquote',
    //                                     'bold',
    //                                     'bulletList',
    //                                     'codeBlock',
    //                                     'h2',
    //                                     'h3',
    //                                     'italic',
    //                                     'link',
    //                                     'orderedList',
    //                                     'redo',
    //                                     'strike',
    //                                     'underline',
    //                                     'undo',
    //                                 ])->columnSpan(2),
    //                         ]),
    //                 ]),

    //             Step::make('Aspect technique et communicationnels')
    //                 ->schema([
    //                     Grid::make(2) // Deux colonnes
    //                         ->schema([
    //                             TagsInput::make('formatImpression')
    //                                 ->label('Formats d\'impression')
    //                                 ->placeholder('Ajoutez un format A3, A0...')
    //                                 ->separator(',')
    //                                 ->suggestions(['A3 (Affiche)', 'A0 (Grand format)', 'A6 (Flyer)', 'Roll-up', 'Panneaux']) // Suggestions mais pas obligatoires
    //                                 ->required()
    //                                 ->columnSpanFull(),

    //                             Radio::make('impression')
    //                                 ->label('Désirez-vou que CREA se charge des impressions ?')
    //                                 ->columnSpan(1)
    //                                 ->boolean()
    //                                 ->inline()
    //                                 ->inlineLabel(false),
    //                             Radio::make('communication')
    //                                 ->label("Avez-vous besoin d'une diffusion en direct sur facebook ?")
    //                                 ->boolean()
    //                                 ->columnSpan(1)
    //                                 ->inline()
    //                                 ->inlineLabel(false)

    //                         ]),
    //                 ]),
    //             Step::make('Description de la demande')
    //                 ->schema([
    //                     RichEditor::make('description')
    //                         ->placeholder("Véuillez nous fournir une description claire et concise de
    //                     l'événement (public cible, objectif poursuivi en organisant cet événement, les resultats
    //                     attendu). Avez-vous déjà organiser un événment au sein de votre département? Quels ont été
    //                      les résultats obtenus ...")
    //                         ->label(label: 'Description du département')
    //                         ->toolbarButtons([
    //                             'attachFiles',
    //                             'blockquote',
    //                             'bold',
    //                             'bulletList',
    //                             'codeBlock',
    //                             'h2',
    //                             'h3',
    //                             'italic',
    //                             'link',
    //                             'orderedList',
    //                             'redo',
    //                             'strike',
    //                             'underline',
    //                             'undo',
    //                         ])->required()
    //                         ->columnSpanFull(),
    //                 ])->columnS(12),
    //         ])->persistStepInQueryString('wizard-step')
    //             ->skippable(true) // Permet de sauter des étapes
    //             ->columnSpanFull(), // Prend toute la largeur disponible
    //     ]);
    //         ->schema([
    //             Forms\Components\TextInput::make('nom')
    //                 ->required()
    //                 ->maxLength(255),
    //             Forms\Components\DatePicker::make('birthday')
    //                 ->required(),
    //             Forms\Components\TextInput::make('age')
    //                 ->maxLength(255),
    //             Forms\Components\Textarea::make('adresse')
    //                 ->maxLength(65535)
    //                 ->columnSpanFull(),
    //             Forms\Components\TextInput::make('phone')
    //                 ->tel()
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('email')
    //                 ->email()
    //                 ->required()
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('etat_civil')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('profession')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('annee_conversion')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('date_lieu_bapteme')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('eglise_attache')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default('CMP'),
    //             Forms\Components\TextInput::make('temps_au_cmp')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('departement')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('participer_mission')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default(0),
    //             Forms\Components\Textarea::make('description_mission')
    //                 ->maxLength(65535)
    //                 ->columnSpanFull(),
    //             Forms\Components\TextInput::make('formation_biblique')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default(0),
    //             Forms\Components\TextInput::make('lecture_bible')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('livre_bible')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('base_mission')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('concepte_familier')
    //                 ->maxLength(255),
    //             Forms\Components\TextInput::make('langue')
    //                 ->maxLength(255),
    //             Forms\Components\Textarea::make('competence')
    //                 ->maxLength(65535)
    //                 ->columnSpanFull(),
    //             Forms\Components\TextInput::make('outils_rs')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default(0),
    //             Forms\Components\Textarea::make('but_formation')
    //                 ->maxLength(65535)
    //                 ->columnSpanFull(),
    //             Forms\Components\Textarea::make('objectif')
    //                 ->maxLength(65535)
    //                 ->columnSpanFull(),
    //             Forms\Components\TextInput::make('disponible')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default(0),
    //             Forms\Components\TextInput::make('validationFormulaire')
    //                 ->required()
    //                 ->maxLength(255)
    //                 ->default(0),
    //             Forms\Components\TextInput::make('note_validation')
    //                 ->maxLength(255),
    //         ]);
    // }




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
                                        'Quotidienne' => 'Quotidienne',
                                        'Hebdomadaire' => 'Hebdomadaire',
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
                                    'Non, mais j\'ai quelques notions' => 'Non, mais j\'ai quelques notions',
                                    'Non, je suis novice' => 'Non, je suis novice',
                                ])->required(),
                            Select::make('concepte_familier')->columnSpan(1)
                            ->label("Etes vous familier avec les conceptes tels que le mandat missionnaire, la stratégie missionnaire, et l'inculturation ?")
                                ->options([
                                    'Très familier' => 'Très familier',
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
                    ->skippable(true) // Permet de sauter des étapes
                    ->columnSpanFull(), // Prend toute la largeur disponible
            ]);
    }

    // public static function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Split::make([
    //                 TextColumn::make('nom')
    //                     ->label("Nom")
    //                     ->weight(FontWeight::Bold)
    //                     ->searchable()
    //                     ->sortable(),
    //                     TextColumn::make('age')
    //                     ->label('Âge')
    //                     ->getStateUsing(fn ($record) => $record->birthday ? now()->diffInYears(
    //                         \Illuminate\Support\Carbon::parse($record->birthday)
    //                     ) : 'N/A')
    //                     ->sortable(),
    //                 TextColumn::make('phone')
    //                     ->searchable()
    //                     ->icon('heroicon-m-phone'),
    //                 TextColumn::make('email')
    //                     ->searchable()
    //                     ->icon('heroicon-m-envelope'),


    //             ]),
    //             Panel::make([
    //                 Split::make([
    //                     TextColumn::make('birthday')
    //                         // ->date()
    //                         ->sortable()
    //                         ->formatStateUsing(fn($record) => $record->birthday ?
    //                             now()->diffInYears($record->birthday) . ' ans' : 'N/A')
    //                         ->icon('heroicon-m-calendar'),
    //                     TextColumn::make('profession')
    //                         ->searchable()
    //                         ->icon('heroicon-m-briefcase'),
    //                     TextColumn::make('etat_civil')
    //                         ->searchable()
    //                         ->icon('heroicon-m-user-group'),

    //                 ])->from('md'),
    //             ])->collapsible(false),
    //             Panel::make([
    //                 Split::make([
    //                     TextColumn::make('annee_conversion')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('date_lieu_bapteme')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('eglise_attache')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('temps_au_cmp')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('departement')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     ToggleColumn::make('participer_mission')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     ToggleColumn::make('formation_biblique')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('lecture_bible')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('livre_bible')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('base_mission')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('concepte_familier')
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                 ])->from('md'),
    //             ])->collapsible(),
    //             Panel::make([
    //                 Split::make([
    //                     TextColumn::make('langue_fr')
    //                         ->label("Français")
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('langue_en')
    //                         ->label("Anglais")
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('autres')
    //                         ->label("Autres langues")
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('outils_rs')
    //                         ->label("Maitrise des réseau sociaux")
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('disponible')
    //                         ->label("Disponible")
    //                         ->searchable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     SelectColumn::make('validationFormulaire')
    //                         ->label("Validation")
    //                         ->options([
    //                             '0' => 'En attente',
    //                             '1' => 'Validé',
    //                             '2' => 'Rejeté',
    //                         ]),
    //                 ])->from('md'),
    //             ])->collapsible(),
    //             Panel::make([
    //                 Stack::make([
    //                     TextColumn::make('created_at')
    //                         ->dateTime()
    //                         ->label("Date d'inscription")
    //                         ->sortable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                     TextColumn::make('updated_at')
    //                         ->dateTime()
    //                         ->label("Date de modification")
    //                         ->sortable()
    //                         ->toggleable(isToggledHiddenByDefault: true),
    //                 ]),
    //             ])->collapsible()
    //         ])->contentGrid([
    //             'md' => 3,
    //             'xl' => 2,
    //         ])
    //         ->actions([
    //             // ActionGroup::make([
    //                 Tables\Actions\ViewAction::make(),
    //                 Tables\Actions\EditAction::make(),
    //                 Tables\Actions\DeleteAction::make(),
    //             // ])
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //             BulkAction::make('export')
    //                 ->label('Exporter en Excel')
    //                 ->action(fn($records) => Excel::download(new MissionnaireExport($records), 'export.xlsx')),
    //             BulkAction::make('export_pdf')
    //                 ->label('Exporter en PDF')
    //                 ->action(fn($records) => (new MissionnairePdfExport($records))->download()),
    //         ]);
    // }




    public static function table(Table $table): Table
    {
        return $table->striped()->deferLoading()->heading('Les Missionnaires')
            ->description('Cette table contient plus des colonnes que celle qui est visible')
            ->columns([
                TextColumn::make('nom')
                    ->searchable(),
                // TextColumn::make('birthday')
                //     ->date()
                //     ->sortable(),
                TextColumn::make('age')
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
                    ->since()
                    ->label("Converti depuis"),
                IconColumn::make('langue_fr')
                    ->label("Français")
                    ->searchable(),
                IconColumn::make('langue_en')
                    ->label("Anglais")
                    ->searchable(),
                TextColumn::make('date_lieu_bapteme')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('eglise_attache')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                BulkAction::make('export')
                    ->label('Exporter en Excel')
                    ->action(fn($records) => Excel::download(new MissionnaireExport($records), 'export.xlsx')),
                BulkAction::make('export_pdf')
                    ->label('Exporter en PDF')
                    ->action(fn($records) => (new MissionnairePdfExport($records))->download()),

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
            'index' => Pages\ListMissionnaires::route('/'),
            'create' => Pages\CreateMissionnaire::route('/create'),
            'edit' => Pages\EditMissionnaire::route('/{record}/edit'),
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
