@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container mt-4">

        @if($posts->isEmpty())
            <div class="alert alert-info">No posts available.</div>
        @else
            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post['title'] }}</h5>
                        <p>{{$post['body']}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                            <a href="{{ route('posts.show_post', $post['id']) }}" class="btn btn-primary btn-sm">
                                View
                            </a>
                            @if (auth()->check() && auth()->user()->id === $post->user_id)
                            <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            @endif
                           

                            <form action="{{ route('posts.delete_post', $post['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this post?');">
                                    Delete
                                </button>

                            </form>
                            </div>
                            <span class="text-muted">User: {{ $post->user?->name }}</span>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
