@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Edit Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.update_post', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" 
                   value="{{ old('title', $post->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" rows="5" required>{{ old('body', $post->body) }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

     
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="enabled" id="enabled" value="1" {{ old('enabled') ? 'checked' : '' }}>
            <label class="form-check-label" for="enabled">
                Enabled
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
