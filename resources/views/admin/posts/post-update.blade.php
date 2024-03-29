<form method="POST" action="{{ route('posts.update', $post->id) }}">

    @method('PUT')

    <div class="form-group">
        <textarea type="text" name="description" cols="40" rows="5" @if($errors->has('description')) style="border-color: red" @endif class="error" value="{{@old('description', $post->description)}}">{{@old('description', $post->description)}}</textarea>
    </div>
    @if($errors->has('description'))
        @foreach($errors->get('description') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <br>

    <div class="form-group">
        <textarea type="text" name="body" cols="40" rows="5" @if($errors->has('body')) style="border-color: red" @endif class="error" value="{{@old('body', $post->body)}}">{{@old('body', $post->body)}}</textarea>
    </div>

    @if($errors->has('body'))
        @foreach($errors->get('body') as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <br>
    <div>
        @if($errors->has('tags.*'))
            @foreach($errors->get('tags.*') as $error)
                @foreach($error as $err)
                    <p>{{$err}}</p>
                @endforeach
            @endforeach
        @endif
        @foreach(\App\Tag::all() as $tag)

            <input type="checkbox" name="tags[]" value="{{$tag->id}}">{{($tag->name)}}

        @endforeach
    </div>

    <br>
    <button type="submit" value="Update">Update</button>

    @csrf
</form>



