<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
      public function generatePDF()
    {
        $data = ['title' => 'Welcome to Booooth', 'date' => date('m/d/Y')];

        $pdf = PDF::loadView('myPDF', $data);
    
        return $pdf->download('booooth.pdf');
    }
}
