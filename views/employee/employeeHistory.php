<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$employee=$conn->getAll("SELECT * FROM `employees`");
//$notices=$conn->getAll("SELECT * FROM `notices`");

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
	<!-- Datatables -->
    <link href="../../resource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/scroller.bootstrap.css" rel="stylesheet">
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
                                if($_GET['message']=="deletesuccess") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee Data Successfully Deleted.
                                    </div>";
                                } else if($_GET['message']=="deletefailed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Employee deletion Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <h3>Employee<small> History</small></h3>
                    </div>


                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Manage <small>employee</small></h2>
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

                                <table width="100%" id="datatable-buttons" class="display nowrap table table-hover table-striped table-bordered dataTable" role="grid" aria-describedby="attendance123_info" style="width: 100%;" cellspacing="0">

                                      <thead>
                                        <tr role="row">
                    						<th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">First Name</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">Last Name</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 100px;" aria-label="Employee Name: activate to sort column ascending" rowspan="1" colspan="1">Username</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 135px;" aria-label="Email: activate to sort column ascending" rowspan="1" colspan="1">Email</th>
                    					    <th tabindex="0" class="sorting_desc" aria-controls="attendance123" style="width: 30px;" aria-label="Gender : activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Gender</th>
                    					    <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 50px;" aria-label="Role: activate to sort column ascending" rowspan="1" colspan="1">Role</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 81px;" aria-label="Mobile: activate to sort column ascending" rowspan="1" colspan="1">Mobile</th>
                    					    <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 119px;" aria-label="Joining Date: activate to sort column ascending" rowspan="1" colspan="1">Joining Date</th>
                                            <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 35px;" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">Status</th>
                    				        <th tabindex="0" class="sorting" aria-controls="attendance123" style="width: 30px;" aria-label="Action: activate to sort column ascending" rowspan="1" colspan="1">Action</th>
                    				    </tr>
                                      </thead>
                                    <tbody>
                                    <?php
                                    foreach ($employee as $empee){
                                    ?>
                                    <tr>
                                        <td><?=$empee['first_name']?></td>
                                        <td><?=$empee['last_name']?></td>
                                        <td><?=$empee['user_name']?></td>
                                        <td><?=$empee['email']?></td>
                                        <td><?=$empee['gender']?></td>
                                        <td><?=$empee['role']?></td>
                                        <td><?=$empee['mobile_no']?></td>
                                        <td><?=$empee['join_date']?></td>

                                        <td>
                                            <?php
                                            if($empee['status']==1){
                                                echo "pending";
                                            }else{
                                                echo "verified";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                          <form action="../../src/store/create/empDelete.php" method="post">
                                              <input type="hidden" name="delete_id" value="<?=$empee['id']?>">
                                              <!--<a title="delete_btn" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?')" href="../../src/store/dept/deptDelete.php"><i class="fa fa-trash-o"></i></a>-->
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
        <!-- /page content -->

         <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->