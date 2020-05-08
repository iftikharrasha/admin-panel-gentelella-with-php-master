<?php

session_start();

$_SESSION["user"] = "admin";

include '../../../src/common/DBConnection.php';

$conn=new DBConnection();

    //$noticeSubject=$_POST['noticeSubject'];
	$id=$_POST['delete_id'];
   

    $result=$conn->execute("DELETE FROM departments WHERE id='$id'");

    if($result) {
        header("Location: " ."../../../views/industry/departments.php?message=deletesuccess");
        die();
    } else {
        header("Location: " ."../../../views/industry/departments.php?message=deletefailed");
        die();
    }

class NoticeStore
{

}

