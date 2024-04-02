@extends('layouts.main')

@section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('maincontent')
    <div class="container my-5">
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
                        <td class="fs-3">
                            <a href="{{ $project->git_hub }}"><i class="fa-brands fa-github"></i></a>
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
