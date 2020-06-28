<!DOCTYPE html>
<html lang="en">
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
                        <h3>Payslip<small>Generate</small></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Monthly Payroll <small>List</small></h2>
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

                                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Check Payslip</h4>

                                <form class="form-material row" id="salaryform" action="" method="post" novalidate="novalidate">
                                    <div class="col-md-3"></div>

                                  <div class="form-group col-md-3">
                                    <select name="depid" tabindex="1" class="form-control custom-select" id="depid" style="margin-top: 21px;" required="" data-placeholder="Choose a Category">
                                      <option value="#">Department </option>
                                      <option value="2">Administration </option>
                                      <option value="3">Finance, HR, &amp; Admininstration </option>
                                      <option value="4">Research </option>
                                      <option value="5">Information Technology </option>
                                      <option value="6">Support </option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label></label>

                                      <div class="form-group">
                                        <div class="input-group date">
                                          <input name="datetime" class="form-control mydatetimepicker" type="text" placeholder="Month">
                                        </div>
                                      </div>

                                  </div>
                                    <div class="form-group col-md-3">
                                       <button class="btn btn-primary" id="BtnSubmit" style="float:left;margin-top:23px" type="submit">Submit</button>
                                     </div>
                                </form>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-body EmployeeInfo">
                                <h3 class="employee_name">Employee</h3>
                                Worked <span class="hours"></span> Hours in <span class="days"></span> days
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title">Full attendance</h4>
                                  <div class="table-responsive ">
                                    <table width="100%" class="display nowrap table table-hover table-striped table-bordered" id="datatable-buttons" cellspacing="0">
                                      <thead>
                                        <tr role="row">
                                          <th tabindex="0" class="sorting_asc" aria-controls="example23" style="width: 76.5px;" aria-label="PIN &#10; : activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">PIN</th>
                                          <th tabindex="0" class="sorting" aria-controls="example23" style="width: 135px;" aria-label="Full name&#10; : activate to sort column ascending" rowspan="1" colspan="1">Full name </th>
                                          <th tabindex="0" class="sorting" aria-controls="example23" style="width: 149px;" aria-label="Total salary&#10; : activate to sort column ascending" rowspan="1" colspan="1">Total salary</th>
                                          <th tabindex="0" class="sorting" aria-controls="example23" style="width: 103.5px;" aria-label="Action&#10; : activate to sort column ascending" rowspan="1" colspan="1">Action</th>
                                        </tr>
                                     </thead>

                                      <tbody class="leave">

                                      </tbody>
                                    </table>
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