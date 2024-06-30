<!DOCTYPE html>
<html>
<head>
    <title>Blog List</title>
</head>
<body>
    <h1>Blog List</h1>
    @if ($message = Session::get('success'))
        <div>
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="{{ route('blogs.create') }}">Tambah Blog</a>
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->content }}</td>
            <td>
                <a href="{{ route('blogs.show', $blog->id) }}">View</a>
                <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
