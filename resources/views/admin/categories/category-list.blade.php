

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>
    <p>
        <form method="GET" action="{{route('categories.create')}}">
            <button type="submit" value="Create">Create</button>
         </form>
    </p>
    <table border="1">
    @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td>
                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
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
