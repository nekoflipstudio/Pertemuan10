<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // Menampilkan semua project
    public function index()
    {
        $projects = Project::paginate(3);

        return view('pages.projects', compact('projects'));
    }

    // Menampilkan detail project
    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('pages.project-detail', compact('project'));
    }
}