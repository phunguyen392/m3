<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="xuly.php" method="post">
        <table>
            <tr>
                <td> Username </td>
                <td> <input type="text" name="username" value=""></td>
            </tr>
            <tr>
                <td>Passwords</td>
                <td><input type="text" name="password" value=""> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=""></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone" value=""></td>
            </tr>
            <tr>
                <td>Level</td>
                <td>
                    <select name="level">
                        <option value="0">Thanh vien</option>
                        <option value="1">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="do-register" value="dang ky"></td>
            </tr>
        </table>
    </form>
</body>

</html>