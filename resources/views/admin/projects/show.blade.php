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
        <a href="{{ $project->git_hub }}" class="btn btn-outline-primary">Go to GitHub Repo</a>
      </div>
    </div>
    <a href="{{ route('admin.projects.index') }}" class="btn btn-link">Back to Projects</a>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-link">Back to Dashboard</a>
  </div>
@endsection
