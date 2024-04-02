@php
  $editForm = Route::currentRouteName() == 'admin.projects.edit' ? true : false;
@endphp

@extends('layouts.main')


{{-- @section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection --}}

@section('maincontent')
  <div class="container my-5">
    <h1>{{ $editForm ? 'Edit project' : 'Create Project' }}</h1>
    <form action="{{ $editForm ? route('admin.projects.update', $project) : route('admin.projects.store') }}" method="POST" class="row my-4 g-3">
      @csrf
      @method($editForm ? 'PATCH' : 'POST')

      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ $editForm ? ($errors->any() ? old('title') : $project->title) : old('title') }}">
          <label for="title">Project Title</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="author" name="author" placeholder="author" value="{{ $editForm ? ($errors->any() ? old('author') : $project->author) : old('author') }}">
          <label for="author">Project Author</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="url" class="form-control" id="git_hub" name="git_hub" placeholder="git_hub" value="{{ $editForm ? ($errors->any() ? old('git_hub') : $project->git_hub) : old('git_hub') }}">
          <label for="git_hub">GitHub Repo URL</label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="url" class="form-control" id="image" name="image" placeholder="image" value="{{ $editForm ? ($errors->any() ? old('image') : $project->image) : old('image') }}">
          <label for="image">Image URL</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" placeholder="description" id="description" name="description" style="height: 100px">{{ $editForm ? ($errors->any() ? old('description') : $project->description) : old('description') }}</textarea>
          <label for="description">Project Description</label>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-success">{{ $editForm ? 'Edit project' : 'Save' }}</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-warning">Back to projects list</a>
      </div>


    </form>
  </div>
@endsection
