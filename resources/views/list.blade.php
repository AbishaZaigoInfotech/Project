<h1>Members list</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
        @foreach($members as $member)
        <tr>
            <th>{{$member['id']}}</th>
            <th>{{$member['name']}}</th>
            <th>{{$member['address']}}</th>
        </tr>
        @endforeach
    </table>