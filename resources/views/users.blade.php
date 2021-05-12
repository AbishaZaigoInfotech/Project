<h1>Login form</h1>
<form action="users" method="POST">
@csrf
<input type="text" name="name"><br><br>
<input type="password" name="password"><br><br>
<button type="submit">Login</button>
</form>