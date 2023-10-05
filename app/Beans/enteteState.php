<?php

namespace App\Beans;


use Illuminate\Notifications\Notifiable;

class enteteState
{
    public $tableauDesEtats=array();

    public function EtatDEntete($nomDelaPage)
    {
       
        $tableauDesEtats[0] = '';
        $tableauDesEtats[1] = '';
        $tableauDesEtats[2] = '';
        $tableauDesEtats[3] = '';
        $tableauDesEtats[4] = '';
        $tableauDesEtats[5] = '';
        $tableauDesEtats[6] = '';
        $tableauDesEtats[7] = '';
        if ($nomDelaPage=='accueil')
        {
            $tableauDesEtats[0] = 'active';
        }
        elseif ($nomDelaPage=='batisseur')
        {
            $tableauDesEtats[1] = 'active';
        }
        elseif ($nomDelaPage=="evenement")
        {
            $tableauDesEtats[2] = 'active';
        }
        elseif ($nomDelaPage=='aboutcmp')
        {
            $tableauDesEtats[3] = 'active';
        }
         elseif ($nomDelaPage=='meditation')
        {
            $tableauDesEtats[4] = 'active';
        }
        elseif ($nomDelaPage=="unite")
        {
            $tableauDesEtats[5] = 'active';
        }
        elseif ($nomDelaPage=='team')
        {
            $tableauDesEtats[6] = 'active';
        }
        elseif ($nomDelaPage=='bunda')
        {
            $tableauDesEtats[7] = 'active';
        }
        return $tableauDesEtats;

}
}