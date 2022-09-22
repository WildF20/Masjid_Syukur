@extends("layout.layout_auth")

@section('title', 'Admin')

@section('content')

@if($errors->any())
    <p>
    {{ implode('', $errors->all(':message')) }}
    </p>
@endif
<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
<p id="profile-name" class="profile-name-card"></p>
<form class="form-signin" method="post" action="{{url('auth/login')}}">
    @csrf
    <span id="reauth-email" class="reauth-email"></span>
    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
    <input type="password" name="password" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
</form><!-- /form -->

@endsection
