<?php

session_start();

$_SESSION["user"] = "admin";

include '../../../src/common/DBConnection.php';

$conn=new DBConnection();

    //$noticeSubject=$_POST['noticeSubject'];
	$id=$_POST['delete_id'];
   

    $result=$conn->execute("DELETE FROM employee_designations WHERE id='$id'");

    if($result) {
        header("Location: " ."../../../views/industry/designations.php?message=deletesuccess");
        die();
    } else {
        header("Location: " ."../../../views/industry/designations.php?message=deletefailed");
        die();
    }

class NoticeStore
{

}

