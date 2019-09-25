<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @method('PUT')
    <div class="form-group">
        <input type="text" name="title" @if($errors->has('title')) style="border-color: red" @endif class="error" value="{{@old('title', $category->title)}}">
        <label for="exampleInputEmail1">Category</label>
    </div>
    @if($errors->has('title'))
        @foreach($errors->get('title') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <br>
    <div class="form-group">
        <input type="text" name="slug" @if($errors->has('slug')) style="border-color: red" @endif class="error" value="{{@old('title', $category->slug)}}">
        <label for="exampleInputPassword1">Slug</label>
    </div>
    <br>
    @if($errors->has('slug'))
        @foreach($errors->get('slug') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <button type="submit" value="Update">Update</button>

    @csrf
</form>

