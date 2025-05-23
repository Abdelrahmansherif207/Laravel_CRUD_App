@extends('layouts.main')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Create a New Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">Body:</label>
            <textarea name="body" class="form-control @error('body') is-invalid @enderror" id="body" rows="5">{{ old('body') }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remove user selection, use the authenticated user instead -->
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="enabled" id="enabled" value="1" {{ old('enabled') ? 'checked' : '' }}>
            <label class="form-check-label" for="enabled">
                Enabled
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
