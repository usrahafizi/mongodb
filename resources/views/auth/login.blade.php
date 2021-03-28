@extends ('layout.app')

@section ('content')
<div class="register-container">
  @if(session('status'))
  <div class="text-danger text-sm">
    {{session('status')}}
  </div>
  @endif
  <form action="{{route('login')}}" method="post">
    @csrf
    <div class="form-group">
      <input type="email" class="form-control mt-3 @error('email') text-danger text-sm @enderror" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
      @error('email')
      <div class="text-danger text-sm">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-group">
      <input type="password" class="form-control mt-3 @error('password') text-danger text-sm @enderror" name="password" placeholder="Password" value="{{old('password')}}">
      @error('password')
      <div class="text-danger text-sm">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="form-check">
      <input name="remember" type="checkbox" class="form-check-input" id="remember">
      <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <div class="form-group">
      <button type="submit" class="form-control btn btn-primary mt-3">Login</button>
    </div>
  </form>
</div>
@endsection