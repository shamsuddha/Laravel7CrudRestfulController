<h1> Create a Post </h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="">Post Title</label>
        <input name="title" type="text" class="form-control" id="" placeholder="" value="{{old('title')}}" autocomplete="off">
        @error('title') <p style="color: red;">{{$message}}</p> @enderror
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Post Description</label>
        <textarea autocomplete="off" name="description" class="form-control" id="" rows="3" value="{{old('description')}}"></textarea>
    </div>
    @error('description') <p style="color: red;">{{$message}}</p> @enderror
    <button type="submit">Add Post</button>
</form>
