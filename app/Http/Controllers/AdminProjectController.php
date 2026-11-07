<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProjectController extends Controller
{
    //

    public function index()
    {
        $projects = Projects::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }
}
