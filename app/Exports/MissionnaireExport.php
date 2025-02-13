<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MissionnaireExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    protected $records;

    public function __construct($records)
    {
        $this->records = $records;
    }

    public function collection()
    {
        return $this->records->map(function ($user) {
            return [
                'Nom' => $user->nom,
                'Date de naissance' => $user->birthday,
                'Téléphone' => $user->phone,
                'Email' => $user->email,
                'État Civil' => $user->etat_civil,
                'Profession' => $user->profession,
                'Année de conversion' => $user->annee_conversion,
                'Date & Lieu Baptême' => $user->date_lieu_bapteme,
                'Église Attachée' => $user->eglise_attache,
                'Temps au CMP' => $user->temps_au_cmp,
                'Département' => $user->departement,
                'Participation Mission' => $user->participer_mission,
                'Formation Biblique' => $user->formation_biblique,
                'Lecture Bible' => $user->lecture_bible,
                'Livre Bible' => $user->livre_bible,
                'Base Mission' => $user->base_mission,
                'Concept Familier' => $user->concepte_familier,
                'Français' => $user->langue_fr,
                'Anglais' => $user->langue_en,
                'Autres Langues' => $user->autres,
                'Réseaux Sociaux' => $user->outils_rs,
                'Disponible' => $user->disponible,
                'Validation' => $user->validationFormulaire,
                'Date d\'inscription' => $user->created_at,
                'Date de modification' => $user->updated_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nom', 'Date de naissance', 'Téléphone', 'Email', 'État Civil', 'Profession',
            'Année de conversion', 'Date & Lieu Baptême', 'Église Attachée', 'Temps au CMP',
            'Département', 'Participation Mission', 'Formation Biblique', 'Lecture Bible',
            'Livre Bible', 'Base Mission', 'Concept Familier', 'Français', 'Anglais',
            'Autres Langues', 'Réseaux Sociaux', 'Disponible', 'Validation',
            'Date d\'inscription', 'Date de modification'
        ];
    }
}
