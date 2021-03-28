@extends ('layout.app')

@section ('content')
<div class="container">
  <x-post :post="$post"/>
</div>
@endsection