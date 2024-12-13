<?php

namespace App\Filament\Administrateur\Resources\MissionnaireResource\Pages;

use App\Models\Missionnaire;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Administrateur\Resources\MissionnaireResource;

class PublicMissionnaireForm extends CreateRecord
{
    protected static string $resource = MissionnaireResource::class;

    public function submit(): void
    {
        $this->form->validate();

        // Enregistrer le modèle
        $missionnaire = $this->form->getState();
        Missionnaire::create($missionnaire);

        // Rediriger ou afficher un message
        session()->flash('success', 'Formulaire soumis avec succès.');
        $this->redirect('/');
    }
    public static function getMiddlewares(): array
    {
        // Pas d'utilisation de $this dans un contexte statique
        return [];
    }
}
