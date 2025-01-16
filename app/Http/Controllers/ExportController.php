<?php

namespace App\Http\Controllers;

use App\Models\Requete;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Exports\RequeteExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    public function exportPdf()
    {
        $requetes = Requete::all(); // Adaptez à votre logique
        $pdf = Pdf::loadView('exports.requetes', compact('requetes'))->setPaper('a4', 'landscape');

        return $pdf->download('requetes.pdf');
    }

    public function exportExcel()
    {
        $columns = ['id', 'fullname', 'email', 'phone', 'pays', 'requete', 'created_at']; // Inclure uniquement ces colonnes
        return Excel::download(new RequeteExport($columns), 'requetes.xlsx');
    }
}
