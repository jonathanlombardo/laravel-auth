@extends('layouts.main')

@section('assets')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('maincontent')
  <div class="container my-5">
    <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary mb-3"><i class="fa-solid fa-plus"></i> New project</a>
    <table class="table mb-5">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Option</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($projects as $project)
          <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->author }}</td>
            <td class="fs-4">
              <a class="me-2" href="{{ $project->git_hub }}"><i class="fa-brands fa-github"></i></a>
              <a class="me-2" href="{{ route('admin.projects.show', $project) }}"><i class="fa-solid fa-eye"></i></a>
              <a class="me-2" href="{{ route('admin.projects.edit', $project) }}"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="100%">No projects yet</td>
          </tr>
        @endforelse
      </tbody>
    </table>
    {{ $projects->links() }}
  </div>
@endsection
