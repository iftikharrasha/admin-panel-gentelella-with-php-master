<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$departments=$conn->getAll("SELECT * FROM `departments`");

$designations=$conn->getAll("SELECT * FROM `employee_designations`");

$roles=$conn->getAll("SELECT * FROM `user_role`");

?>

<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <!--bannerremover style of 000w-->
    <style>img[alt="www.000webhost.com"]{display:none;}</style>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Human Resource Management Sysytem</title>

	<!--fonts-->
	<link rel="stylesheet" href="https://use.typekit.net/nfp7kim.css">
	<!--<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">-->
	<!--<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">-->
    <!-- for gooey --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
	<!--for sticky gooey menu-->
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../resource/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../resource/css/jqvmap.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../resource/css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link type="text/css" href="../../resource/css/custom.css" rel="stylesheet">


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

         <!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.php' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
		
		<!--gooey-->
				 <div class="fabs" onclick="toggleBtn()">
  				  <div class="action">
      					<i class="fas fa-plus" id="add"></i>
      					<i class="fas fa-times" id="remove" style="display: none"></i>
  				  </div>

  				  <div class="btns">
      					<a href="../../src/store/Logout.php" class="g-btn"><i class="glyphicon glyphicon-off"></i></a>
      					<a href="../../src/store/sitesettings.php" class="g-btn"><i class="glyphicon glyphicon-cog"></i></a>
      					<a href="" class="g-btn"><i class="glyphicon glyphicon-flash"></i></a>
      					<a href="../../../index.php" class="g-btn"><i class="glyphicon glyphicon-send"></i></a>
  				  </div>
				</div>	
				
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                      <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="success") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee Successfully Created.
                                    </div>";
                                } else if($_GET['message']=="failed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee Adding Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <h3>Create Employee</h3>
                    </div>


                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Put your employee information <small>correctly</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <form class="form-horizontal form-label-left" action="../../src/store/create/user.php" enctype="multipart/form-data" method="post" novalidate="novalidate">

                                  <!--<p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                  </p>-->
                                  <span class="section">Employee Info</span>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">First Name <span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="firstName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="firstName" placeholder="Imtiaz" required="required" type="text">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Last Name <span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="lastName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="lastName" placeholder="Misha" required="required" type="text">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="userName">Username <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="userName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="userName" placeholder="imtiazmisha" required="required" type="text">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="employeeId">Employee ID<span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="empId" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="employeeId" placeholder="123456" required="required" type="text">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="department">Department <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="department" name="departmentId">
                                              <?php foreach ($departments as $department) { ?>
                                              <option value="<?=$department['id']?>"><?=$department['name']?></option>
                                              <?php
                                              }
                                              ?>
                                          </select>
                                      </div>
                                  </div>


                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Designation <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="designation" name="designationId">
                                              <?php foreach ($designations as $designation) { ?>
                                                  <option value="<?=$designation['id']?>"><?=$designation['title']?></option>
                                                  <?php
                                              }
                                              ?>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="role">Role <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="role" name="userRole">
                                              <?php foreach ($roles as $role) { ?>
                                                  <option value="<?=$role['role']?>"><?=$role['role']?></option>
                                                  <!--<option value="<?=$role['ID']?>"><?=$role['role']?></option>-->
                                                  <?php
                                              }
                                              ?>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Gender <span class="required">*</span>
                                    </label>
                                       <p>
                                         Male:
                                         <input type="radio" class="flat" name="gender" id="genderM" value="Male" checked="" required /> Female:
                                         <input type="radio" class="flat" name="gender" id="genderF" value="Female" />
                                       </p>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proPic">Profile Pic <span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="proPic" type="file" name="proPic" data-validate-length-range="5,20" class="form-control col-md-7 col-xs-12">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="joinDate">Date of Joining <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="joinDate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="joinDate" placeholder="Join Date" required="required" type="date">
                                        </div>
                                  </div>

                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required"></span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="email" id="email2" name="email" data-validate-linked="email" placeholder="example@mail.com" required="required" class="form-control col-md-7 col-xs-12">
                                      </div>
                                  </div>
                                  <div class="item form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Number <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="number" id="number" name="number" placeholder="01234567890" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                      </div>
                                  </div>

                                  <div class="item form-group">
                                      <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                      </div>
                                  </div>
                                  <div class="item form-group">
                                      <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                                      </div>
                                  </div>

                                  <div class="ln_solid"></div>
                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-3">
                                          <button type="reset" class="btn btn-primary">Reset</button>
                                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                                      </div>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

         <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->