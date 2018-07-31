<html>
    <head>
        <title>
            Registration Page
        </title>
    </head>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hessam
 * Date: 7/31/18
 * Time: 12:41 PM
 */
include "classes/db.php";

$db1 = new db();

if (isset($_POST['signup'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO users (user_name, user_email, user_pass) VALUES ('$username', '$email', '$pass')";

    $run = $db1->insert($query);
}
