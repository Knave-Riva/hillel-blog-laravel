{{-- resources/views/admin/category-list.blade.php --}}

@extends('adminlte::page')

@section('title', 'Category')

@section('content_header')
    <h1>Categories</h1>
@stop

@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
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
                    <form method="GET" action="{{ route('categories.edit', $category->id) }}">
                        @csrf
                        <button type="submit" value="Update">UPDATE</button>
                    </form>
                </td>
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
    @if (\Session::has('success'))
        <div class="alert alert-success">

            <p>{!! \Session::get('success') !!}</p>

        </div>
    @endif
    </body>
    </html>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


