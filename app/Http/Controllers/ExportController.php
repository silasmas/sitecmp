<?php

namespace App\Http\Controllers;

use App\Models\Requete;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Exports\RequeteExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class ExportController extends Controller
{

    public function exportPdf()
    {
        // Récupère les filtres depuis la session
        $filters = Session::get('filters', []);
        // // // Applique les filtres à la requête
        $query = Requete::query();
        if (!empty($filters['created_at']['created_from'])) {
            $query->whereDate('created_at', '>=', $filters['created_at']['created_from']);
        }

        if (!empty($filters['created_at']['created_to'])) {
            $query->whereDate('created_at', '<=', $filters['created_at']['created_to']);
        }
        // Appliquer le filtre par pays
        if (!empty($filters['pays'])) {
            $query->where('pays', $filters['pays']);
        }
        // Récupère les données filtrées
        $requetes = $query->select('id', 'fullname', 'email', 'phone', 'pays', 'requete', 'created_at')->get();


        // Génère le PDF à partir d'une vue
        // $pdf = Pdf::loadView('exports.requetes',  compact('requetes'))
        //     ->setPaper('a4', 'landscape'); // Orientation paysage

        // Télécharge le fichier PDF
        $pdf = Pdf::loadView('exports.requetes', compact('requetes'))->setPaper('a4', 'landscape');
        // dd($pdf->download('requetes.pdf'));
        // return $pdf->download('users.pdf');
        // $requetes = Requete::all(); // Adaptez à votre logique
        // Session::forget('filters');

        return $pdf->download('requetes.pdf');
    }

    public function exportExcel()
    {
        // Session::forget('filters');
        return Excel::download(new RequeteExport, 'requetes.xlsx');
    }
}
