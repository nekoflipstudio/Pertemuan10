<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private const IMAGE_DIR = 'uploads/projects';

    public function index()
    {
        $projects = Project::orderBy('id')->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project created successfully');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validated($request);

        if ($request->hasFile('image')) {
            $this->deleteImage($project->image);
            $data['image'] = $this->uploadImage($request);
        } else {
            unset($data['image']); // tidak upload baru = pakai gambar lama
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project)
    {
        $this->deleteImage($project->image);
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Project deleted successfully');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'title'       => 'required|string|max:255',
            'technology'  => 'required|string|max:255',
            'status'      => 'required|in:active,In progress,Selesai',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    }

    private function uploadImage(Request $request): string
    {
        $file = $request->file('image');
        $name = $file->hashName();
        $file->move(public_path(self::IMAGE_DIR), $name);

        return self::IMAGE_DIR . '/' . $name;
    }

    private function deleteImage(?string $path): void
    {
        // hanya hapus file hasil upload, bukan gambar bawaan seeder
        if ($path && str_starts_with($path, self::IMAGE_DIR . '/') && file_exists(public_path($path))) {
            @unlink(public_path($path));
        }
    }
}
