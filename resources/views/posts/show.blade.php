<!-- resources/views/posts/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p><strong>Slug:</strong> {{ $post->slug }}</p>
        <p><strong>Category:</strong> {{ $post->category->name }}</p>
        <p><strong>Description:</strong></p>
        <p>{{ $post->description }}</p>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
</body>
</html>
