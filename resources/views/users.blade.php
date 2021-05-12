@include('header')
<h1>User Page</h1>
@include('about')

@foreach ($users as $item)
<h3>{{$item}}</h3>
@endforeach
@include('footer')

<!-- identifies the user is authenticated or not using this csrf token -->
@csrf
<script>
var data=@json($users);
console.warn(data);
</script>