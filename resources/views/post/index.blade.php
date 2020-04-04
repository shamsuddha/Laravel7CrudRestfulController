
    <h1> All Posts </h1>



    @forelse($postList as $post)
<p>{{$post->title}}</p>
        @empty
        <p>No Posts to show</p>

        @endforelse

    <a href="{{route('posts.create')}}">Create New Post</a>
    <a href="{{route('posts.show')}}">Details</a>
