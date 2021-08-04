<h1>Showing all the members</h1>


<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Address</td>
        <td>Operation</td>
    </tr>

    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['address']}}</td>
        <td><a href="delete/{{$member['id']}}">Delete</a>
        <a href="edit/{{$member['id']}}">Edit</a></td>
    </tr>
    @endforeach
</table>