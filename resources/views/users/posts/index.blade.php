@extends ('layout.app')

@section ('content')
<div class="container">
    <div>
        <h1>{{$user->name}}</h1>
        <p>posted {{$posts->count()}} {{Str::plural('post', $posts->count())}} and received 
        {{$user->receviedLike()->count()}} likes.</p>
    </div>
    <div>
        @if ($posts->count())
        @foreach ($posts as $post)
            <x-post :post="$post" />
        @endforeach
        {{ $posts->links()}}
        @else
        <p>{{ $user-> name }} does not have any post.</p>
        @endif
    </div>
</div>
@endsection