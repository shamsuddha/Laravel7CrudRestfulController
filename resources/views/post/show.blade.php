<h1>Post Details</h1>


<strong> Post Title </strong>
<p>{{$post->title}}</p>


<strong> Post Description </strong>
<p>{{$post->description}}</p>

<a href="{{ route('posts.edit', $post->id) }}">Edit</a>


<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @method('DELETE')
    @csrf

    <button>Delete</button>
</form>

