<h1>User Page</h1>

@if($user=='anil')
<h3>Hi {{$user}}</h3>
@elseif($user=='sam')
<h3>Hello {{$user}}</h3>
@else
<h3>Unknown user</h3>
@endif

@for($i=0; $i<10; $i++)
<h1>{{$i}}</h1>
@endfor