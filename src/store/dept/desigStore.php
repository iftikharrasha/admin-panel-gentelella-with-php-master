<?php

session_start();

$_SESSION["user"] = "admin";

include '../../../src/common/DBConnection.php';

$conn=new DBConnection();

    //$noticeSubject=$_POST['noticeSubject'];
	$desigName=$_POST['designation'];
   

    $result=$conn->execute("INSERT INTO employee_designations (title, created_by, create_date) 
     VALUES ('".$desigName."', '".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

    if($result) {
        header("Location: " ."../../../views/industry/designations.php?message=success");
        die();
    } else {
        header("Location: " ."../../../views/industry/designations.php?message=failed");
        die();
    }

class NoticeStore
{

}