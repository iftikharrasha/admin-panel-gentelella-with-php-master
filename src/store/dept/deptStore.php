<?php

session_start();

$_SESSION["user"] = "admin";

include '../../../src/common/DBConnection.php';

$conn=new DBConnection();

	$deptName=$_POST['department'];
   

    $result=$conn->execute("INSERT INTO departments (name, create_by, create_date) 
     VALUES ('".$deptName."', '".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

    if($result) {
        header("Location: " ."../../../views/industry/departments.php?message=success");
        die();
    } else {
        header("Location: " ."../../../views/industry/departments.php?message=failed");
        die();
    }

class NoticeStore
{

}