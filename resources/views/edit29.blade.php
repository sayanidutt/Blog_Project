<h1>Edit your details</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}"/>
    Enter name: <input type="text" name="name" value="{{$data['name']}}"/><br><br>
    Enter age: <input type="text" name="age" value="{{$data['age']}}"/><br><br>
    Enter address: <input type="text" name="address" value="{{$data['address']}}"/><br><br>
    <button type="submit">Update</button>
</form>