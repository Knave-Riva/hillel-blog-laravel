<form method="POST" action="{{ route('tags.store') }}">
    <div class="form-group">
        <input type="text" name="name">
        <label for="exampleInputEmail1">Tag</label>
    </div>
    <br>
    <div class="form-group">
        <input type="text" name="slug">
        <label for="exampleInputPassword1">Slug</label>
    </div>
    <br>
    <button type="submit" value="Create">Create</button>

    @csrf
</form>
