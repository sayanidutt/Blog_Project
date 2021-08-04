<h1>Add Member</h1>

@if(session('user'))
<h3 style="color: green">{{session('user')}} has been added</h3>
@endif

<form action="add22" method="POST">
    @csrf
    Enter Name<input type="text" name="username" placeholder="Enter your Name"/><br><br>
    Enter Password<input type="password" name="userpass" placeholder="Enter Password"/><br><br>
    Enter Email<input type="email" name="useremail" placeholder="Enter your email"/><br><br>
    <button type="submit">Add Member</button>
</form>