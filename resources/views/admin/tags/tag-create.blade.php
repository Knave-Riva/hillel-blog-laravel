<form method="POST" action="{{ route('tags.store') }}">

    <div class="form-group">
        <input type="text" name="name" @if($errors->has('name')) style="border-color: red" @endif class="error" value="{{@old('name')}}">
        <label>Tag</label>
    </div>
    @if($errors->has('name'))
        @foreach($errors->get('name') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <br>
    <div class="form-group">
        <input type="text" name="slug" @if($errors->has('slug')) style="border-color: red" @endif class="error" value="{{@old('slug')}}">
        <label>Slug</label>
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

