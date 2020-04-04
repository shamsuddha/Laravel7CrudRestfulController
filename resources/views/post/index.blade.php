
<h1> All Posts </h1>
@forelse($postList as $post)
    <p>{{$post->title}}</p> <br/>
    <a href="{{ route('posts.show', $post->id) }}">Details</a>

@empty
    <p>No Posts to show</p>
@endforelse
<a href="{{route('posts.create')}}">Create New Post</a>

