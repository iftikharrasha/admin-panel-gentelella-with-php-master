<?php

session_start();

$_SESSION["user"] = "admin";

include '../../../src/common/DBConnection.php';

$conn=new DBConnection();

	$fname=$_POST['firstName'];
	$lname=$_POST['lastName'];
	$uname=$_POST['userName'];
	$employeeid=$_POST['employeeId'];
	$deptId=$_POST['departmentId'];
	$desigId=$_POST['designationId'];
	$role=$_POST['userRole'];
	//$roleId=$_POST['userRoleId'];
	$gend=$_POST['gender'];
  
	$joining=$_POST['joinDate'];
	$email=$_POST['email'];
	$numb=$_POST['number'];
	$pass=$_POST['password'];

    $result=$conn->execute("INSERT INTO employees (first_name, last_name, user_name, employee_id, department_id, designation_id, role, gender, join_date, email, mobile_no, password, create_by, created_date)
     VALUES ('".$fname."', '".$lname."', '".$uname."', '".$employeeid."', '".$deptId."', '".$desigId."', '".$role."', '".$gend."', '".$joining."', '".$email."', '".$numb."', '".$pass."','".$_SESSION["user"]."', CURRENT_TIMESTAMP)");

    if($result) {
        header("Location: " ."../../../views/employee/createEmployee.php?message=success");
        die();
    } else {
        header("Location: " ."../../../views/employee/createEmployee.php?message=failed");
        die();
    }

class NoticeStore
{

}
