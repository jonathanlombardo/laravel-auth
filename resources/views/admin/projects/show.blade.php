@extends('layouts.main')

{{-- @section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection --}}

@section('maincontent')
  <div class="container my-5">
    <h1>{{ $project->title }}</h1>
    <div class="row my-5">
      <div class="col-6">
        <img src="{{ $project->image }}" alt="{{ $project->title }} image">
      </div>
      <div class="col-6 text-center d-flex flex-column gap-3">
        <div>
          <div><strong>Author</strong></div>
          <div>{{ $project->author }}</div>
        </div>
        <div>
          <div><strong>Description</strong></div>
          <div>{{ $project->description }}</div>
        </div>
        <a href="{{ $project->git_hub }}" class="btn btn-outline-primary {{ $project->git_hub ? '' : 'disabled' }}">Go to GitHub Repo</a>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-outline-primary">Edit Project</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirm-destroy">Delete Project</button>
      </div>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-link">Back to Projects</a>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-link">Back to Dashboard</a>

  </div>
@endsection

@section('modals')
  <!-- Modal -->
  <div class="modal fade" id="confirm-destroy" tabindex="-1" aria-labelledby="confirmDestroyModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting project</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          The elimination is permanent. Would you like to delete project {{ $project->title }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete project</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
