<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <center>
    <div>
        <h1>Login</h1>
        <form action="proses.php" method="POST">
            <div>
                <label for="">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <br>
            <div>
                <label for="">Password</label>
                <input type="text" id="password" name="password" required>
            </div>
            <br>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
    </center>
</body>
</html>