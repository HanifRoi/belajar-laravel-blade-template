<html>
    <body>
        <form action="">
            <input type="checkbox" @checked($user['premium']) value="Premium"><br>
            <input type="text" value="{{ $user['name'] }}" @readonly(!$user['admin'])>
        </form>
    </body>
</html>