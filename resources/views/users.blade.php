<h1>User Page</h1>
@include('about')

@foreach ($users as $item)
<h3>{{$item}}</h3>
@endforeach

@csrf
<script>
var data=@json($users);
console.warn(data);
</script>