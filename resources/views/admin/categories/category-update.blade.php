{{-- resources/views/admin/category-update.blade.php --}}

@extends('adminlte::page')

@section('title', 'Update')

@section('content_header')
    <h1>Update</h1>
@stop

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">

    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @method('PUT')

        <div class="form-group">
            @if($errors->has('title'))
                    <input type="text" name="title" class="form-control is-warning" id="inputWarning" value="{{@old('title', $category->title)}}">
                    <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                        warning</label>
            @else  <input type="text" name="title" class="form-control is-valid"  id="inputSuccess" value="{{@old('title', $category->title)}}">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                        success</label>
            @endif
        @if($errors->has('title'))
            @foreach($errors->get('title') as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif
        <br>
             @if($errors->has('slug'))
                   <input type="text" name="slug" class="form-control is-warning" id="inputWarning" value="{{ @old('slug', $category->slug) }}">
                   <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                   warning</label>
             @else  <input type="text" name="slug" class="form-control is-valid"  id="inputSuccess" value="{{ @old('slug', $category->slug) }}">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                    success</label>
             @endif
        <br>
        @if($errors->has('slug'))
            @foreach($errors->get('slug') as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif
        <button type="submit" value="Update">Update</button>
        </div>
        @csrf
    </form>
    </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


{{--<form role="form" method="POST" action="{{ route('categories.store') }}">--}}
{{--    <div class="form-group">--}}
{{--        @if($errors->has('title'))--}}
{{--            <input type="text" name="title" class="form-control is-warning" id="inputWarning" value="{{ @old('title') }}">--}}
{{--            <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with--}}
{{--                warning</label>--}}
{{--        @else  <input type="text" name="title" class="form-control is-valid"  id="inputSuccess" value="{{ @old('title') }}">--}}
{{--        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with--}}
{{--            success</label>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    @if($errors->has('title'))--}}
{{--        @foreach($errors->get('title') as $error)--}}
{{--            <p>{{$error}}</p>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    <br>--}}
{{--    @if($errors->has('slug'))--}}
{{--        <input type="text" name="slug" class="form-control is-warning" id="inputWarning" value="{{ @old('slug') }}">--}}
{{--        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with--}}
{{--            warning</label>--}}
{{--    @else  <input type="text" name="slug" class="form-control is-valid"  id="inputSuccess" value="{{ @old('slug') }}">--}}
{{--    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with--}}
{{--        success</label>--}}
{{--    @endif--}}
{{--    <br>--}}
{{--    @if($errors->has('slug'))--}}
{{--        @foreach($errors->get('slug') as $error)--}}
{{--            <p>{{$error}}</p>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    <button type="submit" value="Create">Create</button>--}}

{{--    @csrf--}}
{{--</form>--}}
