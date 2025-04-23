@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>{{ $post->title }}</h1>
    <p><strong>Body:</strong> {{ $post->body }}</p>
    <p><strong>User ID:</strong> {{ $post->user_id }}</p>
    <p><strong>Status:</strong> {{ $post->enabled ? 'Enabled' : 'Disabled' }}</p>
    <p><strong>Created At:</strong> {{ $post->created_at->format('Y-m-d H:i:s') }}</p>
    <p><strong>Updated At:</strong> {{ $post->updated_at->format('Y-m-d H:i:s') }}</p>
    
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
@endsection
