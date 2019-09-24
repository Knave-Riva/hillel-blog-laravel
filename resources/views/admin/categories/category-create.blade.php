

<form method="POST" action="{{ route('categories.store') }}">
    <div class="form-group">
        <input type="text" name="title" @if($errors->has('title')) style="border-color: red" @endif class="error" value="{{@old('title')}}">
        <label for="exampleInputEmail1">Category</label>
    </div>
    @if($errors->has('title'))
        @foreach($errors->get('title') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <br>
    <div class="form-group">
        <input type="text" name="slug" @if($errors->has('slug')) style="border-color: red" @endif class="error" value="{{@old('title')}}">
        <label for="exampleInputPassword1">Slug</label>
    </div>
    <br>
    @if($errors->has('slug'))
        @foreach($errors->get('slug') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <button type="submit" value="Create">Create</button>

    @csrf
</form>

