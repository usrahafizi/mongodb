@extends ('layout.app')

@section ('content')
<div class="register-container">
  <form action="{{route('register')}}" method="post">
    @csrf
    <div class="form-group">
      <input type="text" class="form-control mt-3 @error('name') text-danger text-sm @enderror" name="name" 
      placeholder="Name" value="{{old('name')}}">
      @error('name')
      <div class="text-danger text-sm">
        {{$message}}
      </div> 
      @enderror
    </div>
    <div class="form-group">
      <input type="text" class="form-control mt-3 @error('username') text-danger text-sm @enderror" name="username"
      placeholder="Username" value="{{old('username')}}">
      @error('username')
      <div class="text-danger text-sm">
        {{$message}}
      </div> 
      @enderror
    </div>
    <div class="form-group">
      <input type="email" class="form-control mt-3 @error('email') text-danger text-sm @enderror" name="email" aria-describedby="emailHelp" 
      placeholder="Enter email" value="{{old('email')}}">
      @error('email')
      <div class="text-danger text-sm">
        {{$message}}
      </div> 
      @enderror
    </div>
    <div class="form-group">
      <input type="password" class="form-control mt-3 @error('password') text-danger text-sm @enderror" name="password" 
      placeholder="Password" value="{{old('password')}}">
      @error('password')
      <div class="text-danger text-sm">
        {{$message}}
      </div> 
      @enderror
    </div>
    <div class="form-group">
      <input type="password" class="form-control mt-3" name="password_confirmation" 
      placeholder="Repeat password">
    </div>
    <div class="form-group">
      <button type="submit" class="form-control btn btn-primary mt-3">Submit</button>
    </div>
  </form>
</div>
@endsection