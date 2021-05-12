<h1>Login form</h1>
<form action="users" method="POST">
@csrf
<input type="text" name="name"><br>
<span style="color:red">@error('name'){{$message}}@enderror</span>
<br><br>
<input type="password" name="password"><br>
<span style="color:red">@error('password'){{$message}}@enderror</span>
<br><br>
<button type="submit">Login</button>
</form>