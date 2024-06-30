<!DOCTYPE html>
<html>

<head>
    <title>Tambah Blog</title>
</head>

<body>
    <h1>Tambah Blog</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Isi</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <!-- <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
        <br>
        <button type="submit">Tambah</button>
    </form> -->
</body>

</html>