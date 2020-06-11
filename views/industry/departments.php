<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$departments=$conn->getAll("SELECT * FROM `departments`");

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
                        <h3>Departments <small>list</small></h3>
                        <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="success") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Department Successfully Added.
                                    </div>";
                                } else if($_GET['message']=="failed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Department Adding Unfortunately Failed, Please Try Again Later
                                    </div>";
                                } else if($_GET['message']=="deletesuccess") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Department Successfully Deleted.
                                    </div>";
                                } else if($_GET['message']=="deletefailed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Department deletion Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                    </div>


                </div>

                <div class="clearfix"></div>
				

                <div class="row">

                  <div class="col-md-5 col-sm-3 col-xs-12">
                    <div class="card card-outline-info">
                          <div class="card-header">
                              <h4 class="m-b-0 text-white">Add Department</h4>
                          </div>

                          <div class="card-body">
                                  <form action="../../src/store/dept/deptStore.php" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                      <div class="form-body">
                                          <div class="row ">
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="control-label">Department Name</label>
                                                      <input name="department" class="form-control" id="firstName" required="" type="text" placeholder="" minlength="3" value="">
                                                  </div>
                                              </div>
                                              <!--/span-->
                                          </div>
                                          <!--/row-->
                                      </div>
                                      <div class="form-actions">
                                          <button class="btn btn-info" type="submit"> <i class="fa fa-check"></i> Save</button>
                                          <button class="btn btn-info" type="button">Cancel</button>
                                      </div>
                                  </form>
                          </div>
                      </div>
                  </div>

                    <div class="col-md-7 col-sm-9 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Manage <small>Notice</small></h2>
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

                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <div class="card card-outline-info">

                               <div class="card-body">
                                <div class="table-responsive ">
                                    <table width="100%" class="display table table-hover table-striped table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Department Name</th>
                                                <th>Edit</th>
												                        <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                               foreach ($departments as $department){
                                            ?>
                                            <tr>
                                                <td><?=$department['name']?></td>
                                                <td class="jsgrid-align-center">
                                                    <a title="Edit" class="btn btn-sm btn-info waves-effect waves-light" href="../../src/store/dept/deptEdit.php"><i class="fa fa-pencil-square-o"></i></a>

                        												</td>
                        												 <td class="jsgrid-align-center">

                        													<form action="../../src/store/dept/deptDelete.php" method="post">
                                                      <input type="hidden" name="delete_id" value="<?=$department['id']?>">
                        													    <button type = "submit" class="btn btn-sm btn-info waves-effect waves-light" onclick="return confirm('Are you sure to delete this data?')"><i class="fa fa-trash-o"></i></button>
                                                  </form>
                        												</td>
                                            </tr>
                                            <?php
                                                 }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    