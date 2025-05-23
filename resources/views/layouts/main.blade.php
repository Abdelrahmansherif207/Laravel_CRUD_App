<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<title>{{ $title ?? 'Laravel Blog' }}</title>
<style>
    .posts {
        display: flex;
        gap: 20px;
    }
</style>
</head>
<body>
    <div class="container">
    @section('sidebar')
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('welcome') }}">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown {{ request()->routeIs('posts.*') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="postsDropdown">
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">
                                    View Posts
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->routeIs('posts.create_post') ? 'active' : '' }}" href="{{ route('posts.create_post') }}">
                                    Create Post
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    @show
    </div>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
