<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PpdfViewController extends Controller
{
    public function accomplishment(Request $request)
    {
        $request = $request->input();

        $pdf = Pdf::loadView('accomplishment', $request['record'])->setPaper('a4', 'landscape');
        
        return $pdf->stream($request['record']['title'] . '.pdf');
    }
}
