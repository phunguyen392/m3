<?php
    include "b2-bt1-ql-user.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];

    $user = new User($name,$email,$role);
    $user->setName($name);
    $user->setEmail($email);
    $user->setRole($role);
    $user->isAdmin();  

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div ><br>

        <form action="" method="POST">
            <label>
                nhap ten:<br>
                <input type="text" name="name" placeholder="hay nhap ten">
            </label><br>
            <label>
                nhap email:<br>
        <input type="email" name="email" placeholder="hay nhap email">
    </label><br>
    <label>
        Role
        <select name="role" >
            <option value="1" >1</option>
            <option value="2">2</option>
        </select><br>
    </label>
    <button type="submit">thuc hien</button>
</form>  
</div>
<style>
    form{
        text-align: center;
    }
</style>
</body>
</html>
