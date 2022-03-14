<?php
require("function.php");
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$conn = getConn();
session_start();

//  $pass=password_hash($password,PASSWORD_BCRYPT);
// executive logi
$pass = md5($password);
$sql3 = "SELECT * FROM admin where username ='$username' and password='$pass'";
$stmt = $conn->prepare($sql3);
$stmt->execute();
$single_record = $stmt->fetchAll();
print($single_record);
//  $pass_check=password_verify($password,$pass);
if($username == $single_record[0]['username'] && $pass == $single_record[0]['password']) {

    $_SESSION['adminid'] = $username;
    header("Location: listing.php");
} else {
    $_SESSION['error_msg'] = 'username and password is incorrect';
    header("Location: login.php");
}

