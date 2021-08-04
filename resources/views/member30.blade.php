<h1>Showing all the members</h1>


<table border="1">

    @foreach($members as $member)
    <tr>
        <td>{{$member['name']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
    @endforeach
</table>