{{-- resources/views/admin/category-create.blade.php --}}

@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="wrapper">
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('categories.store') }}">
                                    <div class="form-group">
                                        @if($errors->has('title'))
                                                <input type="text" name="title" class="form-control is-warning" id="inputWarning" value="{{ @old('title') }}">
                                                <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                                                    warning</label>
                                            @else  <input type="text" name="title" class="form-control is-valid"  id="inputSuccess" value="{{ @old('title') }}">
                                                <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                                                    success</label>
                                        @endif
                                    </div>
                                    @if($errors->has('title'))
                                        @foreach($errors->get('title') as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    @endif
                                    <br>
                                    @if($errors->has('slug'))
                                        <input type="text" name="slug" class="form-control is-warning" id="inputWarning" value="{{ @old('slug') }}">
                                        <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                                            warning</label>
                                    @else  <input type="text" name="slug" class="form-control is-valid"  id="inputSuccess" value="{{ @old('slug') }}">
                                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                                        success</label>
                                    @endif
                                    <br>
                                    @if($errors->has('slug'))
                                        @foreach($errors->get('slug') as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    @endif
                                    <button type="submit" value="Create">Create</button>

                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

    </body>
    </html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


{{--<div class="form-group">--}}
{{--    <input type="text" name="slug" @if($errors->has('slug')) style="border-color: red" @endif class="error" value="{{@old('slug')}}">--}}
{{--    <label for="exampleInputPassword1">Slug</label>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <input type="text" name="slug" @if($errors->has('slug')) style="border-color: red" @endif class="error" value="{{@old('slug')}}">--}}
{{--    <label for="exampleInputPassword1">Slug</label>--}}
{{--</div>--}}
{{--<div class="form-group">--}}

{{--</div>--}}

{{--<div class="form-group">--}}
{{--    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with--}}
{{--        success</label>--}}
{{--    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">--}}
{{--</div>--}}
