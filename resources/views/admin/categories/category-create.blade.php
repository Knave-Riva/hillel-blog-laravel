<form method="POST" action="{{ route('categories.store') }}">
    <div class="form-group">
        <input type="text" name="title">
        <label for="exampleInputEmail1">Category</label>
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
