@extends('partials.layout')

@section('title', 'View Post')

@section('content')
    <div class="card bg-base-300">
        <div class="card-body">
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Title</legend>
                <input 
                    type="text" 
                    class="input w-full" 
                    value="{{ $post->title }}" 
                    disabled
                />
            </fieldset>

            <fieldset class="fieldset mt-4">
                <legend class="fieldset-legend">Content</legend>
                <textarea 
                    class="textarea h-96 w-full" 
                    disabled
                >{{ $post->body }}</textarea>
            </fieldset>

            <div class="mt-4 flex justify-between items-center text-sm text-gray-400">
                <p>Created: {{ $post->created_at->format('Y-m-d H:i') }}</p>
                <p>Updated: {{ $post->updated_at->format('Y-m-d H:i') }}</p>
            </div>

            <div class="mt-6">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Back to Posts</a>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning ml-2">Edit</a>
            </div>
        </div>
    </div>
@endsection
