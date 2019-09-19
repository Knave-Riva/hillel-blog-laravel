<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<p>
    <p>
        <form method="GET" action="{{route('tags.create')}}">
            <button type="submit" value="Create">Create</button>
         </form>
    </p>
    <table border="1">
    @foreach ($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>{{ $tag->slug }}</td>
                <td>{{ $tag->created_at }}</td>
                <td>{{ $tag->updated_at }}</td>
                <td>
                    <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" value="DELETE">DELETE</button>
                    </form>
                </td>
            </tr>
    @endforeach
    </table>

</body>
</html>
