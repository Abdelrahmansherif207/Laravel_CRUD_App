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
                        
                        <a href="{{ route('posts.show_post', $post['id']) }}" class="btn btn-primary btn-sm">
                            View
                        </a>

                        <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('posts.delete_post', $post['id']) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this post?');">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
