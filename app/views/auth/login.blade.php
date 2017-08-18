<html>
    <body>

        <form method="post" action="{{URL::to('auth/login')}}">
            <input type="text" name="email">
            <input type="password" name="password">
            <input type="submit" value="Login">
        </form>
        <p>or <a href="{{URL::to('auth/register')}}">Register</a></p>
    </body>
</html>
