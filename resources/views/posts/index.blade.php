@extends('partials.layout')
@section('title', 'Home page')
@section('content')
    <h1 class="text-3xl">Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn join-item btn-primary">New Post</a>
    {{ $posts->links() }}
    <table class="table table-zebra">
        <thead>
            <th>ID</th>
            <th>Title</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </thead>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->Created_at }}</td>
                <td>{{ $post->Updated_at }}</td>
                <td>
                    <div class="join">
                        <a class="btn join-item btn-info">View</a>
                        <a class="btn join-item btn-warning">Edit</a>
                        <a class="btn join-item btn-error">Delete</a>
                    </div>
                </td>
            </tr>
        @endforeach
        <tbody>

        </tbody>
    </table>
    {{ $posts->links() }}

@endsection
