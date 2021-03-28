@props(['post'=> $post])

<div class="mb-4">
    <a href="{{route('Post.User', $post->user)}}" class="font-weight-bold">{{$post->user->name}}</a>
    <span class="text-sm text-muted">{{$post->created_at->diffForHumans()}}</span>
    <p class="mb-2">{{$post->body}}</p>
    <div class="d-flex align-items-center flex-row bd-highlight mb-3">
        @auth
        @if (!$post->likeBy(auth()->user()))
        <form action="{{route('posts.likes', $post)}}" method="post">
            @csrf
            <button type="submit" class="form-control btn mr-1 text-info">Like</button>
        </form>
        @else
        <form action="{{route('posts.likes', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="form-control btn  mr-1 text-info">Unlike</button>
        </form>
        @endif
        @endauth
        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
        @can ('delete', $post)
        <form action="{{route('posts.destroy', $post)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="form-control btn mr-1 text-info">Delete</button>
        </form>
        @endcan
    </div>
</div>