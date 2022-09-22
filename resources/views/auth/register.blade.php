@extends("layout.layout_auth")
@section('content')
<div class="card card-container">
    @if(session ('success'))
    <h2>{{session('success')}}</h2>
    @endif
    <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
    <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
    <p id="profile-name" class="profile-name-card"></p>
    <form class="form-signin" method="post" action="{{url('auth/register')}}">
        @csrf
        <input type="text" class="form-control" placeholder="User Name" required autofocus name="user">

        <input type="password"  class="form-control" placeholder="Password" required name="password">

        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Register</button>
    </form><!-- /form -->
    <a href="{{url('auth/login')}}" class="forgot-password">
        Login
    </a>
</div><!-- /card-container -->
@endsection