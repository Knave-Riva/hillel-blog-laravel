

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
    <body>
            <p>
                <form method="GET" action="{{ route('posts.create') }}">
                    <button type="submit" value="Create">Create</button>
                 </form>
            </p>
            <table border="1">
            @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->user->name}}</td>
                        <td>{{ $post->category->title }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <form method="GET" action="{{ route('posts.edit', $post->id) }}">
                                @csrf
                                <button type="submit" value="Update">UPDATE</button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" value="DELETE">DELETE</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </table>
            @if (\Session::has('success'))
                <div class="alert alert-success">

                    <p>{!! \Session::get('success') !!}</p>

                </div>
            @endif
    </body>
</html>
