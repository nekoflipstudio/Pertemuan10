<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    //

    public function index()
    {
        $projects = Projects::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function cetakPdf()
    {
        $projects = Projects::all();
        $pdf = Pdf::loadView('admin.projects.pdf', compact('projects'));
        return $pdf->stream('projects.pdf');
    }
}
