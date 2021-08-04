<h1>Add Member</h1>

<form action="save" method="POST">
    @csrf
    Enter Name: <input type="text" name="name" placeholder="Enter your name"/><br><br>
    Enter Age: <input type="text" name="age" placeholder="Enter your age"/><br><br>
    Enter Address: <input type="text" name="address" placeholder="Enter your address"/><br><br>
    <button type="submit">Add Member</button>
</form>