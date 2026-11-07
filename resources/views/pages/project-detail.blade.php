@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container py-4" style="max-width: 760px;">
    @if ($project->image)
        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid rounded mb-3">
    @endif

    <h2>{{ $project->title }}</h2>
    <p class="text-muted mb-1">Tech: {{ $project->technology }}</p>
    <p class="mb-3"><span class="badge bg-secondary">{{ $project->status }}</span></p>
    <p>{{ $project->description }}</p>

    <a href="{{ route('projects') }}" class="btn btn-outline-primary btn-sm">&larr; Kembali</a>
</div>
@endsection
