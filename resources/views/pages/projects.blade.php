
@extends('layouts.app')

@section('title', 'My Projects | MyProfile')

@section('content')

<style>
    .projects-section {
        padding: 35px 0 25px;
    }

    .projects-title {
        text-align: center;
        font-size: 30px;
        font-weight: 400;
        margin-bottom: 32px;
        color: #212529;
    }

    .project-card {
        height: 100%;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        overflow: hidden;
        background: #fff;
    }

    .project-image {
        width: 100%;
        height: 148px;
        object-fit: cover;
        display: block;
        background: #e9ecef;
    }

    .project-image-placeholder {
        height: 148px;
        background: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #6c757d;
        font-size: 15px;
    }

    .project-card-body {
        padding: 10px 12px 12px;
    }

    .project-card h5 {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 7px;
    }

    .project-description {
        font-size: 13px;
        margin-bottom: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .project-technology {
        font-size: 12px;
        color: #6c757d;
        margin-bottom: 10px;
    }

    .project-button {
        width: 100%;
        font-size: 13px;
        padding: 5px;
        border-radius: 4px;
    }

    .projects-pagination {
        margin-top: 32px;
        display: flex;
        justify-content: center;
    }

    .projects-pagination nav {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .projects-pagination p {
        font-size: 11px;
        color: #6c757d;
        margin-bottom: 8px;
    }

    .projects-pagination .pagination {
        margin-bottom: 0;
    }

    .projects-pagination .page-link {
        font-size: 12px;
        color: #0d6efd;
    }

    .projects-pagination .active .page-link {
        background: #0d6efd;
        border-color: #0d6efd;
        color: white;
    }
</style>

<div class="projects-section">

    <h1 class="projects-title">My Projects</h1>

    <div class="row justify-content-center g-3">

        @forelse ($projects as $project)

            <div class="col-md-4">

                <div class="project-card">

                    @if ($project->image)
                        <img
                            src="{{ asset($project->image) }}"
                            alt="{{ $project->title }}"
                            class="project-image"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                        >

                        <div class="project-image-placeholder"
                             style="display:none;">
                            {{ $project->title }}
                        </div>
                    @else
                        <div class="project-image-placeholder">
                            {{ $project->title }}
                        </div>
                    @endif

                    <div class="project-card-body">

                        <h5>{{ $project->title }}</h5>

                        <p class="project-description">
                            {{ $project->description }}
                        </p>

                        <p class="project-technology">
                            Tech: {{ $project->technology }}
                        </p>

                        <a href="{{ route('projects.show', $project->id) }}"
                           class="btn btn-primary project-button">
                            Lihat Detail
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="col-12 text-center">
                <p>Belum ada project yang tersedia.</p>
            </div>

        @endforelse

    </div>

    <div class="projects-pagination">
        {{ $projects->links('pagination::bootstrap-5') }}
    </div>

</div>

@endsection
