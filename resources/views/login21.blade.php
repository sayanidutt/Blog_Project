<h1>Login Form</h1>

<form action="user21" method="POST">
    @csrf
    Name:<input type="text" name="name" placeholder="Enter name"/><br><br>
    Password:<input type="password" name="password" placeholder="Enter password"/><br><br>
    <button type="submit">Login</button>
</form>