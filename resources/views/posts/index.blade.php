@extends ('layout.app')

@section ('content')
<div class="container">
  @auth
    <form action="{{route('posts')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="body"></label>
        <textarea name="body" placeholder="Post something!" class="form-control mt-3 @error('password') text-danger 
        text-sm @enderror" id="body" rows="3"></textarea>
        @error('body')
        <div class="text-danger text-sm">
          {{$message}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary mt-3">Post</button>
    </form>
  @endauth
  <div>
    @if ($posts->count())
    @foreach ($posts as $post)
    <x-post :post="$post" />
    @endforeach
    {{ $posts->links()}}
    @else
    <p>There is no post.</p>
    @endif
  </div>
</div>
@endsection