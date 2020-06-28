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
                        <h3>Payroll <small>List</small></h3>
                    </div>

                    
                </div>

                <div class="clearfix"></div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>See All <small>Payrolls</small></h2>
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

                                <div class="row">
                                  <div class="col-md-12">
                                      <div class="card">
                                          <div class="card-body">
                                              <h4 class="card-title">Full List</h4>
                                              <div class="table-responsive ">
                                                <table width="100%" class="display nowrap table table-hover table-striped table-bordered" id="datatable-buttons" cellspacing="0">
                                                  <thead>
                                                     <tr role="row">
                                                       <th tabindex="0" class="hide sorting" aria-controls="example123" style="width: 0px;" aria-label="SL : activate to sort column ascending" rowspan="1" colspan="1">SL </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 49.5px;" aria-label="PIN : activate to sort column ascending" rowspan="1" colspan="1">PIN </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 93px;" aria-label="Employee : activate to sort column ascending" rowspan="1" colspan="1">Employee </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 71px;" aria-label="Month : activate to sort column ascending" rowspan="1" colspan="1">Month </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 66px;" aria-label="Salary : activate to sort column ascending" rowspan="1" colspan="1">Salary </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 58px;" aria-label="Loan : activate to sort column ascending" rowspan="1" colspan="1">Loan </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 102px;" aria-label="Total hours : activate to sort column ascending" rowspan="1" colspan="1">Total hours </th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 93px;" aria-label="Deduction: activate to sort column ascending" rowspan="1" colspan="1">Deduction</th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 88px;" aria-label="Total Paid: activate to sort column ascending" rowspan="1" colspan="1">Total Paid</th>
                                                       <th tabindex="0" class="sorting_desc" aria-controls="example123" style="width: 81px;" aria-label="Pay Date: activate to sort column ascending" aria-sort="descending" rowspan="1" colspan="1">Pay Date</th>
                                                       <th tabindex="0" class="sorting" aria-controls="example123" style="width: 62px;" aria-label="Status: activate to sort column ascending" rowspan="1" colspan="1">Status</th>
                                                       <th tabindex="0" class="jsgrid-align-center sorting" aria-controls="example123" style="width: 65.5px;" aria-label="Action: activate to sort column ascending" rowspan="1" colspan="1">Action</th>
                                                     </tr>
                                                 </thead>
                                                  <tbody>

                                                  </tbody>

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
                    </div>
                </div>




            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.php' ?>
        <!-- /footer content include -->