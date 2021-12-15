<form action="{{ route('login')}}" method="POST">
    <label>
        <input type="email" name="email" placeholder="Your Email">
    </label>
    <label>
        <input type="password" name="password" placeholder="Set a password">
    </label>
    <input type="submit" value="Login">
</form>