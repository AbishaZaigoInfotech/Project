<h1>Login Form</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter the name"><br><br>
    <input type="password" name="password" placeholder="Enter the password"><br><br>
    <button type="submit">Submit</button>
</form>