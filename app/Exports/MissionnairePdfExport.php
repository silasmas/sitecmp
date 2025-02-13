<?php

namespace App\Exports;


 use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
// use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class MissionnairePdfExport
{
    protected $records;

    public function __construct($records)
    {
        $this->records = $records;
    }

    public function download()
    {
        $pdf = Pdf::loadView('exports.Missionnaire', ['users' => $this->records]);
        return $pdf->download('users.pdf');
    }
}
