<h1> Edit a Post </h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PATCH')



    <div class="form-group">
        <label for="">Post Title</label>
        <input name="title" type="text" class="form-control" id="" placeholder="" value="{{$post->title}}" autocomplete="off">
        @error('title') <p style="color: red;">{{$message}}</p> @enderror
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Post Description</label>
        <textarea autocomplete="off" name="description" class="form-control" id="" rows="3">{{$post->description}}</textarea>
    </div>
    @error('description') <p style="color: red;">{{$message}}</p> @enderror
    <button type="submit">Update Post</button>
</form>
