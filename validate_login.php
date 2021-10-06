<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset style="width: 400px">
        <legend> Login</legend>
        <table>
            <tr>
                <td>Họ và tên:</td>
                <td>
                    <input type="text" name="user">
                </td>
            </tr>
            <tr>
                <td>Lớp:</td>
                <td>
                    <input type="text" name="class">
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" name="mail">
                </td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td>
                    <input type="text" name="sdt">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Sign Up">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user"];
    $mail = $_POST["mail"];
    $phoneNumber = $_POST["sdt"];
    $class = $_POST["class"];

    function checkEmail($mail)
    {
        $regex = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
        if (preg_match($regex, $mail)) {
            echo "$mail" . "<br>";
        } else {
            echo "  Email is wrong!" ."<br>";
        }
    }
    function checkUserName($name){
        $regex = "/^[_a-z0-9]{6,}$/";
        if (preg_match($regex, $name)) {
            echo "$name" . "<br>";
        } else {
            echo " UserName is wrong!" ."<br>";
        }
    }
    function checkPhoneNumber($phone){
        $regex = "/^\d{10,}$/";
        if (preg_match($regex, $phone)) {
            echo "$phone" . "<br>";
        } else {
            echo " PhoneNumber is wrong!" ."<br>";
        }
    }
    function checkClass($class){
        $regex = "/^[A-Z][0-9]{4}[A-Z]$/";
        if (preg_match($regex, $class)) {
            echo "$class" . "<br>";
        } else {
            echo " Class is wrong!" ."<br>";
        }
    }
    checkUserName($name);
    checkEmail($mail);
    checkPhoneNumber($phoneNumber);
    checkClass($class);
}


?>