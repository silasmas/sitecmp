<?php

namespace App\Exports;

use App\Models\Requete;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class RequeteExport implements FromCollection, WithHeadings, WithMapping
{
    protected $columns;

    public function __construct($columns = ['id', 'fullname', 'email', 'phone', 'pays', 'requete', 'created_at'])
    {
        $this->columns = $columns;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Récupère les filtres depuis la session
        // $filters = Session::get('filters', []);
        // Applique les filtres à la requête
        // $query = Requete::query();

        // if (!empty($filters['created_at']['created_from'])) {
        //     $query->whereDate('created_at', '>=', $filters['created_at']['created_from']);
        // }

        // if (!empty($filters['created_at']['created_to'])) {
        //     $query->whereDate('created_at', '<=', $filters['created_at']['created_to']);
        // }
        // Appliquer le filtre par pays
        if (!empty($filters['pays'])) {
            $query->where('pays', $filters['pays']);
        }

        return  Requete::select($this->columns)->get();
        // return Requete::select($this->columns)->get();
    }

    /**
     * Définit les en-têtes des colonnes.
     */
    public function headings(): array
    {
        $headingsMap = [
            'id' => '#',
            'name' => 'Nom',
            'email' => 'Email',
            'phone' => 'Phone',
            'pays' => 'Pays',
            'requete' => 'Requete',
            'created_at' => 'Date d\'envoi',
        ];
        return array_map(fn($column) => $headingsMap[$column] ?? $column, $this->columns);
    }

    /**
     * Personnalise les données de chaque ligne.
     */
    public function map($user): array
    {
        $row = [];

        foreach ($this->columns as $column) {
            if ($column === 'created_at') {
                $row[] = $user->created_at->format('d/m/Y H:i');
            } else {
                $row[] = $user->{$column};
            }
        }

        return $row;
        // return [
        //     $user->id,
        //     $user->fullname,
        //     $user->email,
        //     $user->phone,
        //     $user->pays,
        //     $user->requete,
        //     $user->created_at->format('d/m/Y H:i'), // Formatage personnalisé
        // ];
    }
}
