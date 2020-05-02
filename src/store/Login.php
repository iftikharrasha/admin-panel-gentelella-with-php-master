<?php

session_start();

include_once ('../common/DBConnection.php');

$dbConnection = new DBConnection();
$restlt = $dbConnection->getAll('SELECT * FROM admins');

$admin ="";
foreach ($restlt as $row){
    $admin = $row;
}

$_SESSION['admin_name'] = $admin['name'];
$_SESSION['admin_password'] = $admin['password'];

if (isset($_POST['login'])){

    $user_name = trim($_POST['userName']);
    $user_password = trim($_POST['password']);

    if ($user_name == $_SESSION['admin_name'] && $user_password == $_SESSION['admin_password']) {
        header("Location:../../views/admin/dashboard.php");
    } else {
        header("Location:../../index.php?msg=User name or password is invalid");
    }
}

class Login
{

}