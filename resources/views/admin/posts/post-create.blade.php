<form method="POST" action="{{ route('posts.store') }}">

    @if($errors->has('user_id'))
        @foreach($errors->get('user_id') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <select name="user_id">

        @foreach(\App\User::all() as $user)
            <option @if ($user->id == @old('user_id')) selected @endif; value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach

    </select>

    <br>

    @if($errors->has('category_id'))
        @foreach($errors->get('category_id') as $error)
             <p>{{$error}}</p>
        @endforeach
    @endif

    <select name="category_id">

        @foreach(\App\category::all() as $category)
            <option @if ($category->id == @old('category_id')) selected @endif; value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach

    </select>

    <br>

        <div class="form-group">
            <input type="text" name="title" @if($errors->has('title')) style="border-color: red" @endif class="error" value="{{@old('title')}}">
            <label>Post</label>
        </div>
        @if($errors->has('title'))
            @foreach($errors->get('title') as $error)
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
        <br>

        <div class="form-group">
            <textarea type="text" name="description" cols="40" rows="5" @if($errors->has('description')) style="border-color: red" @endif class="error" value="{{@old('description')}}">Descripton</textarea>
        </div>
        @if($errors->has('description'))
            @foreach($errors->get('description') as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <br>

        <div class="form-group">
            <textarea type="text" name="body" cols="40" rows="5" @if($errors->has('body')) style="border-color: red" @endif class="error" value="{{@old('body')}}">Body</textarea>
        </div>

        @if($errors->has('body'))
            @foreach($errors->get('body') as $error)
                <p>{{$error}}</p>
            @endforeach
        @endif

        <br>
    <button type="submit" value="Create">Create</button>



    @csrf
</form>

