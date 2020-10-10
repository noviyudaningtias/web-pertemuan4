<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .inputan {
            width: 100px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
         }
    </style>
</head>
<body>
    <p>login System</p>
    <form menthod="post" action= "ceklogin.php">
    <label>Username<br></label>
    <input class="inputan" type="text" name="username">
    <label><br>Password<br></label>
    <input class="inputan" type="text" name="password">
    <input type="submit" name="tombolSubmit" value="login">
    <a href="regis.php" class="tombol">Registrasi</a>
    </form>
</body>
</html>