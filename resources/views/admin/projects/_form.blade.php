@php $current = strtolower(old('status', $project->status ?? '')); @endphp

@if ($errors->any())
    <div class="alert alert-danger py-2">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label mb-1">Nama Project</label>
        <input type="text" name="title" class="form-control form-control-sm"
               value="{{ old('title', $project->title ?? '') }}">
    </div>

    <div class="col-md-6">
        <label class="form-label mb-1">Teknologi</label>
        <input type="text" name="technology" class="form-control form-control-sm"
               value="{{ old('technology', $project->technology ?? '') }}">
    </div>

    <div class="col-md-6">
        <label class="form-label mb-1">Status</label>
        <select name="status" class="form-select form-select-sm">
            <option value="">Pilih Status</option>
            <option value="active"      {{ $current === 'active' ? 'selected' : '' }}>Active</option>
            <option value="In progress" {{ $current === 'in progress' ? 'selected' : '' }}>In progress</option>
            <option value="Selesai"     {{ $current === 'selesai' ? 'selected' : '' }}>Selesai</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label mb-1">Image</label>
        @if (!empty($project->image))
            <div class="mb-1"><img src="{{ asset($project->image) }}" alt="" class="thumb"></div>
        @endif
        <input type="file" name="image" class="form-control form-control-sm" accept="image/*">
    </div>

    <div class="col-12">
        <label class="form-label mb-1">Description</label>
        <textarea name="description" rows="3" class="form-control form-control-sm">{{ old('description', $project->description ?? '') }}</textarea>
    </div>
</div>
