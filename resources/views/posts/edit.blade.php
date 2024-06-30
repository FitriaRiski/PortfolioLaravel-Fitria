<!DOCTYPE html>
<html>

<head>
    <title>Edit Blog</title>
</head>

<body>
    <h1>Edit Blog</h1>
    <form method="POST" action="{{ route('posts.update', ['post' => $post->id]) }}">
        @csrf
        @method('PUT') <!-- Pastikan method PUT atau PATCH digunakan untuk update -->
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Isi</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <!-- <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $blog->title }}" required>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ $blog->content }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form> -->
</body>

</html>