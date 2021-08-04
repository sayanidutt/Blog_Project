<h2>Login Form</h2>

{{--
@if($errors->any())
@foreach ($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif --}}

<form action="userlogin" method="POST">
    @csrf
    Username:<input type="text" name="username" placeholder="Enter username"/><br><br>
    <span style="color :tomato">
        @error('username') {{$message}} @enderror
    </span> <br><br>
    Password:<input type="password" name="password" placeholder="Enter password"/><br><br>
    <span style="color :tomato">
        @error('password') {{$message}} @enderror
    </span> <br><br>

    <button type="submit" name="submit">Login</button>
</form>